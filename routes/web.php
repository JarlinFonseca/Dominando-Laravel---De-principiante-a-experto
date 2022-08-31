<?php

use Illuminate\Support\Facades\App;


use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageControlller;




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

 /* Route::get('/', function () {
    return view('welcome');
});
 */

// aprendible.com = Route::get('/', function)
// aprendible.com/contacto = Route::get('contacto', function)


/*  Route::get('/', function () {
    return "Hola desde la página de inicio";
});


Route::get('contacto', function(){
    return "Hola desde la página de contacto";
});

Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
    return "Saludos " . $nombre;
});
 */


/*  Route::get('contactame', function(){
    return  "Seccción de contactos";
})->name('contactos');


Route::get('/', function(){
    echo "<a href ='" . route('contactos') . "'>Contactos 1 </a><br>";
    echo "<a href ='" . route('contactos') . "'>Contactos 2 </a><br>";
    echo "<a href ='" . route('contactos') . "'>Contactos 3 </a><br>";
    echo "<a href ='" . route('contactos') . "'>Contactos 4 </a><br>";
    echo "<a href ='" . route('contactos') . "'>Contactos 5 </a><br>";
}); 
 */


App::setLocale('es');

Route::get('/', function() {
   $nombre = "Jarlin";

 /*    return view('home')->with('nombre', $nombre); */
    /* return view('home', ['nombre' => $nombre]) */
   return view('home', compact('nombre')); // ['nombre' => $nombre]
})->name('home');






/* Route::view('/', 'home',['nombre' => 'Jarlin'] ); // Ejemplo polticias de privacidad, termnos y condicioens, paginas que no tienen mucha logica */
Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');
Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/{id}', [ProjectController::class, 'show'])->name('projects.show');

Route::view('/contacto', 'contact')->name('contact');  
Route::post('contacto', [MessageControlller::class, 'store'])->name('messages.store');

//Route::resource('proyectos', PortfolioController::class);
