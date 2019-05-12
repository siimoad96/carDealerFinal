<?php
################################# Auth Controller ################################# 
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

#################################  Home Controller ################################# 
Route::get('/home', 'HomeController@index')->name('home');

#################################  Pages Controller ################################# 
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/Client/accueil', 'PagesController@accueilClient');
Route::get('/Client/recherche', 'PagesController@recherche');
//Route::get('/Client/accueil', 'PagesController@index');
Route::get('/Admin/gererpannonce', 'PagesController@gererpannonce');
Route::get('/Partenaire/listereservations', 'PagesController@listereservations');
Route::get('/Partenaire/accueil', 'PagesController@part');


#################################  Voitures Controller ################################# 
Route::get('/Partenaire/ajoutVoiture', 'VoituresController@ajoutVoiture');
Route::post('/Partenaire/ajoutVoiture', 'VoituresController@ajoutVoitureSuccess')->name('voiture.add');

#################################  Annonces Controller ################################# 
Route::get('/Partenaire/ajoutannonce', 'AnnoncesController@ajoutannonce');
Route::post('/Partenaire/ajoutannonce', 'AnnoncesController@ajoutannonceSuccess');
Route::any('/Client/recherche', 'AnnoncesController@recherche');
Route::post('/Client/recherche', 'AnnoncesController@recherche');
Route::any('/Client/rechercheDate', 'AnnoncesController@rechercheDate');
Route::post('/Client/rechercheDate',  'AnnoncesController@rechercheDate');
Route::get('/Client/reserverAnnonce', 'AnnoncesController@reserverAnnonce');
Route::get('/Client/AnnonceNotFound', 'AnnoncesController@reserverAnnonce');
Route::get('/Client/reservationSuccess', 'AnnoncesController@reservationSuccess');

///hada mnin kan5lih makidinix l page d les infos ms ila 7ydtou makit2ajoutawx f bd 3awed :()
Route::post('/Client/reserverAnnonce', 'AnnoncesController@demandeAnnonceEnvoyer');

Route::get('/Admin/gererAnnonce', 'AnnoncesController@indexAnnonce')->name('A_AnnonceList');
Route::get('/Admin/modifierAnnonce/{id}', 'AnnoncesController@editAnnonce');
Route::post('/Admin/modifierAnnonce/{id}/edit', 'AnnoncesController@updateAnnonce')->name('annonce.update');
Route::get('/annonce/{id}', 'AnnoncesController@annonce')->name('annonce');
Route::post('/annonce/{id}', 'AnnoncesController@annonce');
Route::get('/Admin/gererAnnonce/{id}/delete', 'AnnoncesController@deleteAnnonce')->name('annonce.delete');
Route::get('/Partenaire/listereservations', 'AnnoncesController@annoncePartenaire');
Route::get('/Partenaire/demandesReservation/{id}', 'DemandesController@demandeReservation');
Route::get('/Partenaire/demandeApprouve/{id}', 'SendEmailController@approuverDemande');

Route::any('/Partenaire/formEvaluation/{id}', 'Notes@noter');
Route::any('/Client/formEvaluation/{id}', 'Notes@notervoiture');
Route::any('/recherche', 'AnnoncesController@rechercheClient');
Route::post('/recherche', 'AnnoncesController@rechercheClient');
Route::any('/rechercheDate', 'AnnoncesController@rechercheDateClient');
Route::post('/rechercheDate',  'AnnoncesController@rechercheDateClient');
#################################  Users Controller #################################
Route::get('/Admin/gererPartenaire', 'UsersController@indexPartenaire')->name('A_PartenaireList');
Route::get('/Admin/gererClient', 'UsersController@indexClient')->name('A_ClientList');
Route::get('/Admin/modifierClient/{id}/edit', 'UsersController@editClient');
Route::post('/Admin/modifierClient/{id}/edit', 'UsersController@updateUser');
Route::get('/Admin/modifierPartenaire/{id}/edit', 'UsersController@editPartenaire');
Route::post('/Admin/modifierPartenaire/{id}/edit', 'UsersController@updateUser');
Route::get('/Admin/gererClient/{id}/delete', 'UsersController@deleteClient')->name('client.delete');
Route::get('/Admin/gererPartenaire/{id}/delete', 'UsersController@deletePartenaire')->name('partenaire.delete');

#################################  Profile Controlle ################################# 
Route::get('/Partenaire/afficherProfile', 'ProfileController@index')->name('profile_partenaire');
Route::get('/Admin/afficherProfile', 'ProfileController@index')->name('profile_admin');
Route::get('/Client/afficherProfile', 'ProfileController@index')->name('profile_client');

Route::get('/Partenaire/modifierProfile', 'ProfileController@update')->name('profile_partenaire.update');
Route::get('/Client/modifierProfile', 'ProfileController@update')->name('profile_client.update');
Route::get('/Admin/modifierProfile', 'ProfileController@update')->name('profile_admin.update');

Route::post('/Partenaire/modifierProfile/update', 'ProfileController@updateProfile')->name('profile_partenaire.updateProfile');
Route::post('/Admin/modifierProfile/update', 'ProfileController@updateProfile')->name('profile_admin.updateProfile');
Route::post('/Client/modifierProfile/update', 'ProfileController@updateProfile')->name('profile_client.updateProfile');



Route::get('/markAsRead',function(){
    auth()->user()->unreadNotifications->markAsRead();
});