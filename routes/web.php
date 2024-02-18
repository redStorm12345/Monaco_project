<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.template');
});

Route::get('accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('actualite', function () {
    return view('actualite');
})->name('actu');

Route::get('etic_university', function () {
    return view('etic_university');
})->name('etic-u');

Route::get('groupe_etic', function () {
    return view('groupe_etic');
})->name('groupe-e');

Route::get('nformation', function () {
    return view('nformation');
})->name('n-formation');

Route::get('cv', function () {
    return view('cv');
})->name('mon-cv');

Route::get('detail_actu', function () {
    return view('detail_actu');
})->name('detailact');

Route::get('pageinscription', function () {
    return view('pageinscription');
})->name('ma-page2');

Route::get('pageconnexion', function () {
    return view('pageconnexion');
})->name('ma-page');
/*
Route::get('{slug}.html', function ($slug) {
    return view("pages.$slug");
});
//*/
Route::get('etic.html', [DataController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
