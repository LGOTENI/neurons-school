<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NoteControlleur;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PersonnelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('/etudiant')->name('etudiant.')->controller(EtudiantController::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    }
);

Route::prefix('/emploie-temps')->name('emploie-temps.')->controller(Emplo::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    }
);

Route::prefix('/personnels')->name('personnels.')->controller(PersonnelController::class)->group(
    function () {
    Route::get("/enseignants", 'enseignantsListe')->name("enseignants.index");
    }
);

Route::prefix('/options')->name('options.')->controller(OptionController::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    }
);


Route::prefix('/matieres')->name('matieres.')->controller(MatiereController::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    }
);


Route::prefix('/register-notes')->name('register-notes.')->controller(NoteControlleur::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    }
);