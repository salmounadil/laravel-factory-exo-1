<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\BatimentsAdminController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\ElevesAdminController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\FormationsAdminController;
use App\Http\Controllers\TypeFormationAdminController;
use App\Http\Controllers\TypeformationController;
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

// Routes Front

Route::get('/', function () {
    return view('home');
});

Route::get('/batiments', [BatimentController::class,'batiments'])->name('batiments') ;
Route::get('/eleves', [EleveController::class,'eleves'])->name('eleves') ;
Route::get('/formations', [FormationController::class,'formations'])->name('formations') ;
Route::get('/typeformations', [TypeformationController::class,'typeformations'])->name('typeformations') ;

// Routes Admin

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/admin/batiments', [BatimentsAdminController::class,'batimentsAdmin'])->name('batimentsAdmin') ;
Route::get('/admin/eleves',[ElevesAdminController::class,'elevesAdmin'])->name('elevesAdmin');
Route::get('/admin/formations',[FormationsAdminController::class,'formationsAdmin'])->name('formationsAdmin');
Route::get('/admin/typesformations',[TypeFormationAdminController::class,'typesformationsAdmin'])->name('typesformationsAdmin');

// Show

Route::get('/show/batiments/{id}',[BatimentsAdminController::class,'show']);
Route::get('/show/eleves/{id}',[ElevesAdminController::class,'show']);
Route::get('/show/formations/{id}',[FormationsAdminController::class,'show']);
Route::get('/show/typesformations/{id}',[TypeFormationAdminController::class,'show']);


// Create

Route::get('/batiments/create',[BatimentsAdminController::class,'create'])->name('newBatiment');
Route::get('/eleves/create',[ElevesAdminController::class,'create'])->name('newEleve');
Route::get('/formations/create',[FormationsAdminController::class,'create'])->name('newFormation');
Route::get('/typesformations/create',[TypeFormationAdminController::class,'create'])->name('newTypeformation');

// Store

Route::post('/batiments/newBatiment',[BatimentsAdminController::class,'store']);
Route::post('/formations/newFormation',[FormationsAdminController::class,'store']);
Route::post('/eleves/newEleve',[ElevesAdminController::class,'store']);
Route::post('/typesformations/newTypeformation',[TypeFormationAdminController::class,'store']);

// Edit

Route::get('/batiments/edit/{id}',[BatimentsAdminController::class,'edit'])->name('editBatiment');
Route::get('/eleves/edit/{id}',[ElevesAdminController::class,'edit'])->name('editEleve');
Route::get('/formations/edit/{id}',[FormationsAdminController::class,'edit'])->name('editFormation');
Route::get('/typesformations/edit/{id}',[TypeFormationAdminController::class,'edit'])->name('editTypeformation');


// Update

Route::post('/batiments/update/{id}',[BatimentsAdminController::class,'update']);
Route::post('/formations/update/{id}',[FormationsAdminController::class,'update']);
Route::post('/eleves/update/{id}',[ElevesAdminController::class,'update']);
Route::post('/typesformations/update/{id}',[TypeFormationAdminController::class,'update']);

// Delete

Route::delete('/batiments/delete/{id}',[BatimentsAdminController::class,'delete']);
Route::delete('/formations/delete/{id}',[FormationsAdminController::class,'delete']);
Route::delete('/eleves/delete/{id}',[ElevesAdminController::class,'delete']);
Route::delete('/typesformations/delete/{id}',[TypeFormationAdminController::class,'delete']);
