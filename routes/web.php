<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::prefix('solutions')->name('solutions.')->group(function () {
    Route::view('/', 'pages.solutions.index')->name('index');

    Route::view('/climatisation', 'pages.solutions.climatisation')
        ->name('climatisation');

    Route::view('/pompes-a-chaleur', 'pages.solutions.pompes-a-chaleur')
        ->name('pompes-a-chaleur');

    Route::view('/ventilation', 'pages.solutions.ventilation')
        ->name('ventilation');

    Route::view('/tertiaire', 'pages.solutions.tertiaire')
        ->name('tertiaire');

    Route::view('/energies-renouvelables', 'pages.solutions.energies-renouvelables')
        ->name('energies-renouvelables');

    Route::view('/accessoires', 'pages.solutions.accessoires')
        ->name('accessoires');
});

Route::view('/marques', 'pages.marques')->name('marques');
Route::view('/services', 'pages.services')->name('services');
Route::view('/entreprise', 'pages.entreprise')->name('entreprise');
Route::view('/contact', 'pages.contact')->name('contact');
