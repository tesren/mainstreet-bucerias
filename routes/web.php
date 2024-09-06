<?php

use App\Livewire\HomePage;
use App\Livewire\UnitPage;
use App\Livewire\AboutPage;
use App\Livewire\SearchPage;
use App\Livewire\InventoryPage;
use App\Livewire\LifestylePage;
use App\Livewire\ConstructionPage;
use App\Livewire\PrivacyPolicyPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::localized(function () {
    Route::get('/', HomePage::class)->name('home');

    Route::get(Lang::uri('/estilo-de-vida-bucerias'), LifestylePage::class)->name('lifestyle');

    Route::get(Lang::uri('/sobre-nosotros'), AboutPage::class)->name('about');

    Route::get(Lang::uri('/aviso-de-privacidad'), PrivacyPolicyPage::class)->name('privacy.policy');

    Route::get(Lang::uri('/buscar-condominios'), SearchPage::class)->name('search');

    Route::get(Lang::uri('/inventario-condominios'), InventoryPage::class)->name('inventory');

    Route::get(Lang::uri('/avances-de-obra'), ConstructionPage::class)->name('construction');

    Route::get(Lang::uri('/condominio-en-venta-bucerias').'/{name}', UnitPage::class)->name('unit');

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

});

Route::get('/mainstreet-optimize', function() {
    Artisan::call('optimize');
    return ('Optimizado');
});