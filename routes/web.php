<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/resume', function () {
    return view('pages.resume');
})->name('resume');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/services/{id}', function ($id) {
    return view('pages.service-details', ['id' => $id]);
})->name('service-details');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/portfolio/{id}', function ($id) {
    return view('pages.portfolio-details', ['id' => $id]);
})->name('portfolio-details');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', function () {
    // TODO: Implémenter la logique d'envoi d'email
    return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès!');
})->name('contact.submit');