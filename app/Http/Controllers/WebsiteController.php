<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    /**
     * Homepage with interactive demo and comprehensive product showcase.
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * Deep-dive Features page.
     */
    public function features(): View
    {
        return view('pages.features');
    }

    /**
     * How It Works step-by-step workflow.
     */
    public function howItWorks(): View
    {
        return view('pages.how-it-works');
    }

    /**
     * Transparent Pricing & Comparison.
     */
    public function pricing(): View
    {
        return view('pages.pricing');
    }

    /**
     * Download Windows Desktop Terminal.
     */
    public function download(): View
    {
        return view('pages.download');
    }

    /**
     * Contact and demo request page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Handle lead/demo request submissions.
     */
    public function storeLead(Request $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:25'],
            'shop_name' => ['nullable', 'string', 'max:120'],
            'city' => ['nullable', 'string', 'max:80'],
            'source' => ['nullable', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        $lead = Lead::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'shop_name' => $validated['shop_name'] ?? null,
            'city' => $validated['city'] ?? 'Karachi',
            'source' => $validated['source'] ?? 'website_contact',
            'message' => $validated['message'] ?? null,
            'status' => 'new',
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Our Aasan Print specialist from Nexgen Pakistan will connect with you via WhatsApp/Call within 15 minutes.',
                'lead_id' => $lead->id,
            ]);
        }

        return back()->with('success', 'Thank you! Your demo request has been received. Our Nexgen Pakistan team will contact you on WhatsApp shortly.');
    }
}
