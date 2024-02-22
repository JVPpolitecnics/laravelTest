<?php

use Illuminate\Support\Facades\Route;
use App\Classes\Cicle;
use App\Classes\Curs;


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
    return view('welcome');
});

Route::get('/cicles', function () {
    
    $cicles = [];
    
    $cicle1 = new Cicle(1, "DAW", "Desenvolupament Aplicacions Web");
    $cicle2 = new Cicle(2, "DAM", "Desenvolupament Aplicacions Multiplataforma");
  $cicles = [$cicle1, $cicle2];

   

return view('ciclo.index', compact('cicles'));
})->name('ciclo');

Route::get('/cursos', function () {
   
    $curso1 = new Curs(1, "DAW1A", "Desenvolupament Aplicacions Web de primer matí A", "DAW");
    $curso2 = new Curs(2, "DAW2A", "Desenvolupament Aplicacions Web de segon matí A");
    $curso3 = new Curs(3, "DAM2B", "Desenvolupament Aplicacions Web de segon matí B");
$cursos = [$curso1,  $curso2, $curso3];
return view('curso.index', compact('cursos'));
})->name('curso');
