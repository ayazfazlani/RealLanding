<?php

use App\Livewire\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\ContactUs;
use App\Livewire\Pages\SEO;
use App\Livewire\Pages\SocialMedia;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\LeadGeneration;
use App\Livewire\Pages\CreativeContent;
use App\Livewire\Pages\PaidAdvertising;
use App\Livewire\PagesAutomationAIAgents;
use App\Livewire\Pages\WebSiteDevelopment;
use App\Livewire\Pages\CreativeAndContentServices;
use App\Livewire\Pages\Services;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/services', Services::class)->name('services');
Route::get('/contact', ContactUs::class)->name('contact');
Route::get('/social-media', SocialMedia::class)->name('social.media');
Route::get('/creative-content', CreativeContent::class)->name('creative.content');
Route::get('/website-development', WebSiteDevelopment::class)->name('website.development');
Route::get('/seo', SEO::class)->name('seo');
Route::get('/automation', PagesAutomationAIAgents::class)->name('automation');
Route::get('/creative-content=services', CreativeAndContentServices::class)->name('creative.contentservices');
Route::get('/paid-advertising', PaidAdvertising::class)->name('paid.advertising');
Route::get('/lead-generation', LeadGeneration::class)->name('lead.generation');