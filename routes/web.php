<?php
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

route::get('',function(){
return view('index');
});
Route::get('contact','IndexController@goToContact');
Route::get('services','IndexController@goToServices');
Route::get('index','IndexController@goToIndex');
Route::get('Mariage','IndexController@goToMariage');
Route::get('Soiree','IndexController@goToSoiree');
Route::get('Conf','IndexController@goToConf');
Route::post('checkEvent','EnvController@checkEvent')->name('EnvController.checkEvent');
Route::get('dashindex','IndexController@goToDash');
Route::get('tables','IndexController@goToTables');
Route::get('page-lockscreen','IndexController@goToLockscreen');
Route::get('page-login','IndexController@goToLogin');
Route::get('page-profile','IndexController@goToProfile');
Route::get('ajouter',' AdminController@goToAdd');


Route::get('/admin/ajoutersalle','AdminController@ajoutersalle')->name ('ajoutersalle.ajouters');
Route::post('/admin/ajoutersalle','AdminController@adminSaveSalle')->name ('ajoutersalle.adminSaveSalle');

Route::get('/admin/ajoutertroupe','AdminController@ajoutertroupe')->name ('ajoutertroupe.ajoutert');
Route::post('/admin/ajoutertroupe','AdminController@adminSaveTroupe')->name ('ajoutertroupe.adminSaveTroupe');

Route::get('/admin/ajouterserveurs','AdminController@ajouterserveurs')->name ('ajouterserveurs.ajouterse');
Route::post('/admin/ajouterserveurs','AdminController@adminSaveServeurs')->name ('ajouterserveurs.adminSaveServeurs');

Route::get('/admin/ajoutercarte','AdminController@ajoutercarte')->name ('ajoutercarte.ajouterc');
Route::post('/admin/ajoutercarte','AdminController@adminSaveCarte')->name ('ajoutercarte.adminSaveCarte');