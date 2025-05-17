<?php

use App\Http\Controllers\ProfileController;
use App\Models\Vault;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Banka;
use App\Http\Controllers\Objavljivanje;
use App\Http\Controllers\Sviproizvodi;
use App\Http\Controllers\Pogledajproizvod;
use App\Http\Controllers\Sefovi;
use App\Http\Controllers\Balance;
use App\Http\Controllers\Deposit;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VijestiController;
use App\Http\Controllers\Admin;

Route::get('/', [Sviproizvodi::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/objaviartikal', function () {
    return view('objaviartikal');
})->middleware(['auth', 'verified'])->name('objaviartikal');

Route::get('/mybalance', function () {
    return view('mybalance');
})->middleware(['auth', 'verified'])->name('mybalance');

Route::post('procesutoku', [Sefovi::class, 'procesutoku'])
    ->middleware(['auth', 'verified'])->name('procesutoku');

Route::get('banka', [Banka::class, 'mojeRude'])
    ->middleware(['auth', 'verified'])->name('banka');

Route::post('dodajbalance', [Balance::class, 'dodajbalance'])
    ->middleware(['auth', 'verified'])->name('dodajbalance');

Route::post('objavljivanje', [Objavljivanje::class, 'objavljivanje'])
    ->middleware(['auth', 'verified'])->name('objavljivanje');

Route::get('deposit', [Deposit::class, 'index'])
    ->middleware(['auth', 'verified'])->name('deposit');

Route::get('pogledajproizvod/{id}', [Pogledajproizvod::class, 'show'])
    ->name('pogledajproizvod');

Route::post('/kupovina/{id}', [Pogledajproizvod::class, 'kupi'])
    ->middleware(['auth', 'verified'])->name('proizvod.kupi');

Route::get('contact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::post('kontakti', [ContactController::class, 'store'])
    ->middleware(['auth', 'verified'])->name('kontakti');

Route::post('depositing', [Deposit::class, 'deposit'])
    ->middleware(['auth', 'verified'])->name('depositing');

Route::get('buydeposit', function () {
    return view('buydeposit');
})->middleware(['auth', 'verified'])->name('buydeposit');

Route::get('shop', [Sefovi::class, 'index'])
    ->middleware(['auth', 'verified'])->name('shop');

Route::get('news',[VijestiController::class,'prikazi'])->middleware(['auth', 'verified'])->name('news');

Route::post('objavivijesti', [VijestiController::class, 'store'])->name('objavivijesti');

Route::get('/admin-objava', function () {
    return view('adminobjava');
})->middleware(['auth', 'verified', 'can:access-admin-panel'])->name('adminobjava');

Route::get('adminpanel', [Admin::class, 'admin'])
    ->middleware(['auth', 'verified', 'can:access-admin-panel'])
    ->name('adminpanel');

Route::get('adminproizvodi', [Sviproizvodi::class, 'proizvodiadmin'])
    ->middleware(['auth', 'verified', 'can:access-admin-panel'])
    ->name('adminproizvodi');

Route::get('adminvault', [Sefovi::class, 'svivault'])
    ->middleware(['auth', 'verified', 'can:access-admin-panel'])
    ->name('adminvault');

Route::get('adminsveporuke',[ContactController::class,'sveporuke'])
    ->middleware(['auth', 'verified', 'can:access-admin-panel'])
    ->name('adminsveporuke');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
