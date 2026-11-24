<?php

use App\Http\Controllers\ContactController;
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

// Pas encore de page Marques : on renvoie vers la section partenaires de l'accueil.
Route::redirect('/marques', '/#marques')->name('marques');

// Anciennes adresses du site WordPress, gardées pour Google et les favoris.
// (/contact/ et /mentions-legales/ existent déjà : le .htaccess retire la barre finale.)
Route::permanentRedirect('/accueil-2', '/');
Route::permanentRedirect('/a-propos', '/entreprise');
Route::permanentRedirect('/nos-partenaires', '/#marques');
Route::permanentRedirect('/politique-de-confidentialite', '/confidentialite');
Route::view('/services', 'pages.services')->name('services');
Route::view('/entreprise', 'pages.entreprise')->name('entreprise');

Route::view('/mentions-legales', 'pages.legal.mentions')->name('legal.mentions');
Route::view('/confidentialite', 'pages.legal.privacy')->name('legal.privacy');

Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.submit');
