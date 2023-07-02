<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NoteControlleur;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\AgendaController;
use App\Models\Faculte;
use App\Models\Niveau;
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

    // Faculte::create([
    //     "nom" => "MIT",
    //     "description"=> "Ma description"
    // ]);

    // Niveau::create([
    //     "nom" => "Licence 3",
    //     "description"=>
    //     "La faculute des sciences vise ....",
    //     "faculte_id" => 1
    // ]);



    return view('index');
})->name("home");

Route::prefix('/etudiant')->name('etudiant.')->controller(EtudiantController::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    Route::post("/", 'recherche');
    Route::get("/profile/{id}", 'show')->name("show");
    Route::get("/store", 'store')->name("store");
    Route::post("/store", 'create');
    Route::get("/active/{etudiant}", 'compte')->name('compte.active');
    }
);

Route::prefix('/emploie-temps')->name('emploie-temps.')->controller(AgendaController::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    }
);

Route::prefix('/examens')->name('examens.')->controller(ExamenController::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    Route::post("/", 'create');
    }
);

Route::prefix('/personnels')->name('personnels.')->controller(PersonnelController::class)->group(
    function () {
    Route::get("/enseignants", 'enseignantsListe')->name("enseignants.index");
    Route::post("/enseignants", 'enseignantsCreate');
    }
);

Route::prefix('/options')->name('options.')->controller(OptionController::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    Route::post("/", 'create');
    Route::get('/delete/{id}', 'delete')->name('delete');
    }
);


Route::prefix('/matieres')->name('matieres.')->controller(MatiereController::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    Route::post("/", 'create');
    }
);


Route::prefix('/register-notes')->name('register-notes.')->controller(NoteControlleur::class)->group(
    function () {
    Route::get("/", 'index')->name("index");
    Route::post("/", 'recherche');
    Route::get("/create/{option}/{niveau}", 'show')->name("show");
    }
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
