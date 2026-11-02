<div x-show="demoModalOpen" 
     x-cloak 
     class="fixed inset-0 z-50 overflow-y-auto"
     aria-labelledby="modal-title" 
     role="dialog" 
     aria-modal="true">
    
    <!-- Backdrop -->
    <div x-show="demoModalOpen"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="demoModalOpen = false"
         class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm transition-opacity"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
        <div x-show="demoModalOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="relative transform overflow-hidden rounded-3xl bg-slate-900 border border-slate-800 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg p-6 sm:p-8"
             x-data="{
                 submitting: false,
                 submitted: false,
                 formData: {
                     name: '',
                     phone: '',
                     shop_name: '',
                     city: 'Karachi',
                     message: 'Interested in Aasan Print for my print shop.'
                 },
                 submitForm() {
                     this.submitting = true;
                     fetch('{{ route('lead.store') }}', {
                         method: 'POST',
                         headers: {
                             'Content-Type': 'application/json',
                             'Accept': 'application/json',
                             'X-CSRF-TOKEN': '{{ csrf_token() }}'
                         },
                         body: JSON.stringify(this.formData)
                     })
                     .then(res => res.json())
                     .then(data => {
                         this.submitting = false;
                         this.submitted = true;
                     })
                     .catch(err => {
                         this.submitting = false;
                         alert('Something went wrong. Please WhatsApp us directly at +92 316 3560803');
                     });
                 }
             }">

            <!-- Close button -->
            <button @click="demoModalOpen = false" 
                    type="button" 
                    class="absolute top-5 right-5 text-slate-400 hover:text-white p-2 rounded-xl hover:bg-slate-800 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Success State -->
            <template x-if="submitted">
                <div class="py-8 text-center space-y-4">
                    <div class="w-16 h-16 bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 rounded-full flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-white">We've Received Your Details!</h3>
                    <p class="text-sm text-slate-300 max-w-sm mx-auto">
                        Our Nexgen Pakistan automation specialist will connect with you on WhatsApp within 15 minutes to configure your shop and provide the free trial key.
                    </p>
                    <div class="pt-4">
                        <button @click="demoModalOpen = false; submitted = false" 
                                class="px-6 py-2.5 rounded-xl bg-amber-500 text-slate-950 font-bold text-sm hover:bg-amber-400">
                            Got It, Close
                        </button>
                    </div>
                </div>
            </template>

            <!-- Form State -->
            <template x-if="!submitted">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-400 border border-amber-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white">Request a Free Live Demo</h3>
                            <p class="text-xs text-slate-400">See how Aasan Print by Nexgen Pakistan saves 2+ hours daily in your shop</p>
                        </div>
                    </div>

                    <form @submit.prevent="submitForm" class="space-y-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">Your Full Name *</label>
                            <input type="text" 
                                   x-model="formData.name" 
                                   required 
                                   placeholder="e.g. Aslam Khan"
                                   class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">WhatsApp / Phone *</label>
                                <input type="text" 
                                       x-model="formData.phone" 
                                       required 
                                       placeholder="03163560803"
                                       class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1">City *</label>
                                <select x-model="formData.city" 
                                        class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                                    <option value="Karachi">Karachi</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Islamabad">Islamabad</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Quetta">Quetta</option>
                                    <option value="Sialkot">Sialkot</option>
                                    <option value="Gujranwala">Gujranwala</option>
                                    <option value="Other">Other City</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">Shop / Business Name</label>
                            <input type="text" 
                                   x-model="formData.shop_name" 
                                   placeholder="e.g. Al-Madina Photostat & Printers"
                                   class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">Notes / Questions</label>
                            <textarea x-model="formData.message" 
                                      rows="2"
                                      placeholder="Tell us what printers you use (e.g. Canon IR2520, HP Laser) or how many counters you have."
                                      class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500"></textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit" 
                                    :disabled="submitting"
                                    class="w-full bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-extrabold py-3 rounded-xl transition-all shadow-lg shadow-amber-500/20 text-sm flex items-center justify-center gap-2">
                                <span x-show="!submitting">Book Free WhatsApp Demo</span>
                                <span x-show="submitting" class="inline-flex items-center gap-2">
                                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-slate-950" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                                    </svg>
                                    Sending...
                                </span>
                            </button>
                            <p class="text-[11px] text-slate-400 text-center mt-2">
                                No obligation. 14-day free trial included with every demo.
                            </p>
                        </div>
                    </form>
                </div>
            </template>
        </div>
    </div>
</div>
