<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function() {
//     return view('home');
    
// })->middleware(['auth'])->name('dashboard');

Route::get("/", [HomeController::class, "home"])->name('dashboard');

// Route::get('/', 'HomeController@HomeController')->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/configuracion','UserController@config')->name('config');

Route::get("/configuracion", [UserController::class, "config"])->name('config');
// Route::get("/movie", [UserController::class, "movie"])->name('movie');
Route::post("/user/edit", [UserController::class, "update"])->name('user.update');
Route::get("/user/avatar/{filename}", [UserController::class, "getImage"])->name('user.avatar');
Route::get("/image/file/{filename}", [HomeController::class, "getImage"])->name('image.file');
Route::get("/image/files/{filename}", [HomeController::class, "getActor"])->name('image.actor');

//Route::post("/movie/save", [MovieController::class, "addMovie"])->name('addMovie');
Route::post('/movie/save', [UserController::class, 'addMovie'])->name('addMovie');

Route::post('/movie/actor', [UserController::class, 'addActor'])->name('addActor');
Route::post('/movie/actor_movie', [UserController::class, 'relacion'])->name('add');


Route::get("/movie/actor/{filename}", [HomeController::class, "getActor"])->name('actor.file');

//admin

Route::get("/admin", [HomeController::class, "admin","getActor"])->name('admin');

//peliculas

Route::get("/movie/{id}", [HomeController::class, "movie"])->name('movie');

Route::get("/movie/actores/{id}", [HomeController::class, "getActores"])->name('actores');


Route::get("/administrar", [HomeController::class, "administrar"])->name('administrar');
Route::get("/administrar/pelicula", [HomeController::class, "administrarp"])->name('administrarp');
Route::get("/administrar/pelicula/actualizar", [HomeController::class, "administrarpa"])->name('administrarpa');
Route::get("/administrar/pelicula/actualizar/{id}", [HomeController::class, "adminpaf"])->name('adminpaf');
Route::get("/administrar/usuarios", [HomeController::class, "usuarios"])->name('usuarios');
Route::get("/administrar/vista/login", [HomeController::class, "vistalogin"])->name('vista-login');
Route::get("/administrar/vista/recomendacion", [HomeController::class, "vistarecomendacion"])->name('vista-recomendacion');
Route::get("/administrar/datos", [HomeController::class, "datos"])->name('datos');



//actualizar movie
Route::post("/movie/update", [UserController::class, "updateMovie"])->name('movie.update');

//comentar
Route::post('/movie/newcoment', [UserController::class, 'addComent'])->name('addComent');
Route::post('/movie/deleteComent', [UserController::class, 'deleteComent'])->name('deleteComent');
Route::post('/movie/updateComment', [UserController::class, 'updateComent'])->name('updateComment');

Route::post('/movie/deleteMovie', [UserController::class, 'deleteMovie'])->name('deleteMovie');





// Route::get('/admin', function () {
//     return view('admin');
// })->name('admin');


// Route::get('/config', function () {
//     return view('user.config');
// });


