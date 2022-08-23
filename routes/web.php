<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessagesControlller;
use App\Http\Controllers\PortfolioController;


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


Route::get('/', function() {
   $nombre = "Jarlin";

 /*    return view('home')->with('nombre', $nombre); */
    /* return view('home', ['nombre' => $nombre]) */
   return view('home', compact('nombre')); // ['nombre' => $nombre]
})->name('home');






/* Route::view('/', 'home',['nombre' => 'Jarlin'] ); // Ejemplo polticias de privacidad, termnos y condicioens, paginas que no tienen mucha logica */
 Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::view('/contact', 'contact')->name('contact');  

Route::post('contact', [MessagesControlller::class, 'store'])->name('messages.store');

//Route::resource('proyectos', PortfolioController::class);
