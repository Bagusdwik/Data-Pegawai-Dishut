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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// form
Route::get('/formdishut', [App\Http\Controllers\dishutController::class, 'create'])->name('formdishut');
Route::get('/formpttpk', [App\Http\Controllers\pttpkController::class, 'create'])->name('formpttpk');

// dashboard
Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');

//tabel
Route::get('/tabeldishut', [App\Http\Controllers\dishutController::class, 'index'])->name('tabeldishut');
Route::get('/tabelstruktural', [App\Http\Controllers\dishutController::class, 'jabatan1'])->name('tabelstruktural');
Route::get('/tabelfungsional', [App\Http\Controllers\dishutController::class, 'jabatan2'])->name('tabelfungsional');
Route::get('/tabelpelaksana', [App\Http\Controllers\dishutController::class, 'jabatan3'])->name('tabelpelaksana');
Route::get('/tabelpns', [App\Http\Controllers\dishutController::class, 'anggota1'])->name('tabelpns');
Route::get('/tabelcpns', [App\Http\Controllers\dishutController::class, 'anggota2'])->name('tabelcpns');

Route::get('/tabelpttpk', [App\Http\Controllers\pttpkController::class, 'index'])->name('tabelpttpk');
Route::get('/tabelpphh', [App\Http\Controllers\pttpkController::class, 'pphh'])->name('tabelpphh');
Route::get('/tabeltahura', [App\Http\Controllers\pttpkController::class, 'tahura'])->name('tabeltahura');
Route::get('/tabelpth', [App\Http\Controllers\pttpkController::class, 'pth'])->name('tabelpth');

//create
Route::post('/dishut/create', [App\Http\Controllers\dishutController::class, 'store']);
Route::post('/pttpk/create', [App\Http\Controllers\pttpkController::class, 'store']);

// edit
Route::get('edit/{id_dishut}',[App\Http\Controllers\dishutController::class, 'edit']);
Route::get('editpttpk/{id_pttpk}',[App\Http\Controllers\pttpkController::class, 'edit']);

//update
Route::post('update/{id_dishut}',[App\Http\Controllers\dishutController::class, 'update']);
Route::post('pttpkupdate/{id_pttpk}',[App\Http\Controllers\pttpkController::class, 'update']);

// delete
Route::get('post/delete/{id_dishut}', [App\Http\Controllers\dishutController::class, 'destroy']);
Route::get('data/deletepttpk/{id_pttpk}', [App\Http\Controllers\pttpkController::class, 'destroy']);

// import
Route::post('/import',[App\Http\Controllers\dishutController::class, 'import']);
Route::post('/pttpkimport',[App\Http\Controllers\pttpkController::class, 'import']);