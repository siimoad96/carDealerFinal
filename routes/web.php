<?php

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

Route::get('/', 'PagesController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/auth/register', 'PagesController@register');
Route::get('/auth/login', 'PagesController@login');

//Route::get('/home', 'HomeController@connected' );


//Client
Route::get('/Client/accueil', 'PagesController@client');
Route::get('/Client/profil', 'PagesController@profil');
Route::get('/Client/modifierprofil', 'PagesController@modifierprofil');
Route::get('/Client/recherche', 'PagesController@recherche');
Route::get('/Client/resultat', 'PagesController@resultat');

//Admin
Route::get('/Admin/accueil', 'PagesController@accueil');
Route::get('/Admin/gererpartenaire', 'PagesController@gererpartenaire');
Route::get('/Admin/gererpannonce', 'PagesController@gererpannonce');
Route::get('/Admin/gererclient', 'PagesController@gererclient');
Route::get('/Admin/profil', 'PagesController@profilAdmin');

//partenaire

Route::get('/Partenaire/ajoutvoiture', 'PagesController@ajoutvoiture');
Route::get('/Partenaire/ajoutannonce', 'PagesController@ajoutannonce');
Route::get('/Partenaire/listereservations', 'PagesController@listereservations');
Route::get('/Partenaire/accueil', 'PagesController@part');
Route::get('/Partenaire/profil', 'PagesController@profilPartenaire');
Route::get('/Partenaire/modifierprofil', 'PagesController@modifierprofil');
