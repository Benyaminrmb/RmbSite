<?php

use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::localized(function () {

        Route::get('/', HomePage::class)->name('home');
        Route::get('/home2', HomePage::class)->name('home2');

}, [
    'supported_locales' => config('localized-routes.supported_locales'),
    'omitted_locale' => config('localized-routes.omitted_locale'),
]);
