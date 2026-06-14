<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmpfController;

// ════════════════════════════════════════════════════════
// AMPF — ROUTES
// Locale detected from subdomain via SetLocale middleware:
//   ampf.ma     → FR
//   en.ampf.ma  → EN
// ════════════════════════════════════════════════════════

Route::middleware('setLocale')->group(function () {

    // ── Pages publiques ────────────────────────────────
    Route::get('/',              [AmpfController::class, 'home'])         ->name('home');
    Route::get('/about',         [AmpfController::class, 'about'])        ->name('about');
    Route::get('/nos_Valeurs',   [AmpfController::class, 'nos_Valeurs'])  ->name('nos_Valeurs');
    Route::get('/nos_Objectifs', [AmpfController::class, 'nos_Objectifs'])->name('nos_Objectifs');
    Route::get('/nos_strategie', [AmpfController::class, 'nos_strategie'])->name('nos_strategie');
    Route::get('/nos_formule',   [AmpfController::class, 'nos_formule'])  ->name('nos_formule');
    Route::get('/media',         [AmpfController::class, 'media'])        ->name('media');
    Route::get('/contact',       [AmpfController::class, 'contact'])      ->name('contact');
    Route::get('/offre',         [AmpfController::class, 'offre'])        ->name('offre');
    Route::get('/commissions',   [AmpfController::class, 'commissions'])  ->name('commissions');
    Route::get('/mot-du-president', [AmpfController::class, 'mot_president'])->name('mot_president');
    Route::get('/partenaires',      [AmpfController::class, 'partenaires'])  ->name('partenaires');

    Route::get('/politique-confidentialite', [AmpfController::class, 'politique'])->name('politique');
    Route::get('/conditions-utilisation',    [AmpfController::class, 'conditions'])->name('conditions');

    // ── Formulaires POST ───────────────────────────────
    Route::post('/store',        [AmpfController::class, 'store'])        ->name('store');
    Route::post('/store_offre',  [AmpfController::class, 'store_offre'])  ->name('store_offre');
    Route::post('/newsletter',   [AmpfController::class, 'newsletter'])   ->name('newsletter');

});

// ── Admin Voyager ──────────────────────────────────────
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
