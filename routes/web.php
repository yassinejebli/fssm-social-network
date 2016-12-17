<?php

use App\User;
use App\Test;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/login', [
    'uses' => 'UserController@logout',
    'as' => 'login'
]);

Route::post('/postLogin',[
    'uses' => 'UserController@postLogin',
    'as' => 'postLogin'
]);


Route::post('/postSignUp',[
    'uses' => 'UserController@postSignUp',
    'as' => 'postSignUp'
]);

Route::get('/stageadd',function (){
    return view('stage');
})->name('stageadd');


//Route::post('/login',function () {
//    return view('login');
//})->name('login');

Route::post('/signin',[
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);

Route::get('/index', [
    'uses' => 'UserController@index',
    'as' => 'index',
    'middleware' => 'auth'
]);

Route::get('/test', [
    'uses' => 'UserController@getAll',
    'as' => 'test',
    'midlleware' => 'auth'
]);

Route::get('/calendar', function () {
    return view('home');
})->name('calendar');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index');


//profil routes
Route::get('/profile',[
    'uses' => 'UserController@getProfile',
    'as' => 'profile',
    'middleware' => 'auth'
]);

//formations
Route::post('/ajouterFormation',[
    'uses' => 'FormationController@ajouterFormation',
    'as' => 'ajouterFormation'
]);
Route::get('/listeFormations',[
    'uses' => 'FormationController@listeFormations',
    'as' => 'listeFormations'
]);

Route::delete('/supprimerFormation',[
    'uses' => 'FormationController@supprimerFormation',
    'as' => 'supprimerFormation'
]);

//Experiences
Route::get('/listeExperiences',[
    'uses' => 'ExperienceController@listeExperiences',
    'as' => 'listeExperiences'
]);

Route::post('/ajouterExperience',[
    'uses' => 'ExperienceController@ajouterExperience',
    'as' => 'ajouterExperience'
]);
Route::delete('/supprimerExperience',[
    'uses' => 'ExperienceController@supprimerExperience',
    'as' => 'supprimerExperience'
]);

// Comptences

Route::get('/listeCompetences',[
    'uses' => 'CompetenceController@listeCompetences',
    'as' => 'listeCompetences'
]);

Route::post('/ajouterCompetence',[
    'uses' => 'CompetenceController@ajouterCompetence',
    'as' => 'ajouterCompetence'
]);

Route::delete('/supprimerCompetence',[
    'uses' => 'CompetenceController@supprimerCompetence',
    'as' => 'supprimerCompetence'
]);


