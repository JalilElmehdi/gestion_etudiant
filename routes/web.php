<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantsController;

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

Route::get('/',[EtudiantsController::class,"Home"])->name('home');


Route::get('/etudiants',[EtudiantsController::class,"Etudiants"])->name('etudiants');


Route::get('/filieres',[EtudiantsController::class,"Filieres"])->name('filieres');


Route::get('/ajouter',[EtudiantsController::class,"AjouterEtudiant"])->name('ajouter');


Route::get('/login',[EtudiantsController::class,"Login"])->name('login');


Route::post('/validerajouter',[EtudiantsController::class,"ValiderAjouter"])->name('validerajouter');


Route::post('/validerlogin',[EtudiantsController::class,"ValiderLogin"])->name('validerlogin');


Route::get('/logout',[EtudiantsController::class,"Logout"])->name('logout');


Route::delete('/deleteE/{etudiant}',[EtudiantsController::class,"DeleteE"])->name('deleteE');


Route::get('/edite/{etudiant}',[EtudiantsController::class,"EditeE"])->name('editeE');


Route::put('/update/{etudiant}',[EtudiantsController::class,"UpdateE"])->name('updateE');










