<?php
use App\Http\Controllers\ProjectaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('lome');
});

Route::get('/projects', [ProjectaController::class, 'index']);
Route::get('/projects/create', [ProjectaController::class , 'create'])->middleware('auth');
Route::post('/projects/create', [ProjectaController::class , 'store'])->middleware('auth');
Route::post('/projects', [ProjectaController::class, 'store'])->name('shush');
// Route::delete('/projects/{pid}', [ProjectaController::class , 'destroy']);
Route::get('/projects/{pid}', [ProjectaController::class , 'show'])->name('projects.p');
Route::delete('/projects/{pid}', [ProjectaController::class , 'destroy'])->middleware('auth');
Route::get('/projects/{pid}/edit', [ProjectaController::class , 'edit'])->name('projects.edit')->middleware('auth');
Route::post('/projects', [ProjectaController::class , 'update'])->name('projects.update')->middleware('auth');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes([
    
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
