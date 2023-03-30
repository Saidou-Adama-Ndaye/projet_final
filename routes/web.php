<?php

use App\Models\Trajet;
use App\Models\Chauffeur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TrajetController;
use App\Http\Controllers\Admin\DashboadController;
use App\Http\Controllers\Admin\ChauffeurController;

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
    $trajets = Trajet::all();
    $chauffeurs = Chauffeur::all();
    return view('welcome', ['trajets' => $trajets, 'chauffeurs' => $chauffeurs]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('dashboad', [DashboadController::class, 'index']);

    Route::controller(TrajetController::class)->group(function (){
        Route::get('/trajet', 'index');
        Route::get('/trajet/create', 'create');
        Route::post('/trajet', 'store');
        Route::get('/trajet/{trajet}/edit', 'edit');
        Route::put('/trajet/{trajet}', 'update');
    });

    Route::controller(ChauffeurController::class)->group(function (){
        Route::get('/chauffeur', 'index');
        Route::get('/chauffeur/create', 'create');
        Route::post('/chauffeur', 'store');
        Route::get('/chauffeur/{chauffeur}/edit', 'edit');
        Route::put('/chauffeur/{chauffeur}', 'update');
    });

    Route::controller(UserController::class)->group(function (){
        Route::get('/user', 'index');
    });

    
});
Route::prefix('user')->middleware('auth')->group(function() {
    
    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/about', function () {
        return view('reservation');
    });



});