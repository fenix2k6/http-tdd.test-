<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/Pc', function(){
    try{

       if(DB::getPdo()){

        echo "Conexion Exitosa HDP.";
       }else {
           echo "problemas de Conexion";
       }
       }
       catch (\Exception $e) {
       die("No se puede conectar a la base  error: " .$e);
    }
});
