<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::get('portal', [App\Http\Controllers\PortalController::class, 'index'])->name('portal.index');
Route::get('portal/success', [App\Http\Controllers\PortalController::class, 'success'])->name('portal.success');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::view('home','home');

Route::view('contact', 'contact');

Route::view('captive', 'captive');

Route::view('success', 'capture.success');

/*Route::get('about', function(){
    $name='Product 1';
    $price=500;
    return view('about',compact('name', 'price'));
});*/

//Easy method from above
Route::view('about','about',['name'=>'Product 1','price'=>700]);

Route::fallback(function(){
    return 'Are you lost bro?';
});

require __DIR__.'/settings.php';
