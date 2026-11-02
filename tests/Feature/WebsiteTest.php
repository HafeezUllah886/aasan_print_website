<?php

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('homepage renders successfully with brand elements', function () {
    $response = $this->get(route('home'));

    $response->assertStatus(200);
    $response->assertSee('Aasan Print');
    $response->assertSee('Automate Your Print Counter');
    $response->assertSee('Test Terminal Bell Chime');
});

test('features page renders successfully', function () {
    $response = $this->get(route('features'));

    $response->assertStatus(200);
    $response->assertSee('Desktop Terminal for Windows');
    $response->assertSee('Counter QR Standees');
});

test('how it works page renders successfully', function () {
    $response = $this->get(route('how-it-works'));

    $response->assertStatus(200);
    $response->assertSee('How Aasan Print Works In Your Shop');
    $response->assertSee('Step 1: Setup Terminal');
});

test('pricing page renders successfully with plans', function () {
    $response = $this->get(route('pricing'));

    $response->assertStatus(200);
    $response->assertSee('Single Shop Pro');
    $response->assertSee('14-Day Free Trial');
});

test('download page renders successfully', function () {
    $response = $this->get(route('download'));

    $response->assertStatus(200);
    $response->assertSee('Download Aasan Print Terminal');
    $response->assertSee('Windows Desktop Terminal');
});

test('contact page renders successfully', function () {
    $response = $this->get(route('contact'));

    $response->assertStatus(200);
    $response->assertSee('Talk To An Aasan Print Specialist');
});

test('user can submit a contact lead form and see success flash', function () {
    $response = $this->post(route('lead.store'), [
        'name' => 'Muhammad Bilal',
        'phone' => '03001234567',
        'shop_name' => 'Bilal Photostat & Copy',
        'city' => 'Lahore',
        'message' => 'I want to know if Canon 2520 is supported.',
    ]);

    $response->assertSessionHas('success');
    $this->assertDatabaseHas('leads', [
        'name' => 'Muhammad Bilal',
        'phone' => '03001234567',
        'shop_name' => 'Bilal Photostat & Copy',
        'city' => 'Lahore',
    ]);
});

test('lead submission validates required fields', function () {
    $response = $this->post(route('lead.store'), []);

    $response->assertSessionHasErrors(['name', 'phone']);
    expect(Lead::count())->toBe(0);
});

test('lead submission supports json ajax requests', function () {
    $response = $this->postJson(route('lead.store'), [
        'name' => 'Rashid Mehmood',
        'phone' => '03219876543',
        'shop_name' => 'Rashid Graphics',
        'city' => 'Karachi',
    ]);

    $response->assertStatus(200);
    $response->assertJson([
        'success' => true,
    ]);

    $this->assertDatabaseHas('leads', [
        'name' => 'Rashid Mehmood',
        'phone' => '03219876543',
    ]);
});

test('website includes nexgen pakistan branding, contact info and logo', function () {
    $response = $this->get(route('home'));
    $response->assertStatus(200);
    $response->assertSee('Nexgen Pakistan');
    $response->assertSee('nexgenpakistan.com');
    $response->assertSee('923163560803');
    $response->assertSee('images/nexgen-logo.png');
    $response->assertSee('favicon.ico');

    $contactResponse = $this->get(route('contact'));
    $contactResponse->assertStatus(200);
    $contactResponse->assertSee('info@nexgenpakistan.com');
    $contactResponse->assertSee('Quetta, Pakistan');
    $contactResponse->assertSee('+92 316 3560803');
});
