<?php

use App\Http\Controllers\NoteController;
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
    return view('welcome');
});
Route::get('file-manager', function () {
    return view('manager.index');
});
Route::get('note', function () {
    return view('note.index');
});
Route::get('data.note',[NoteController::class , 'index'])->name('data.note');
Route::get('data.selasa',[NoteController::class , 'selasa'])->name('data.selasa');
Route::delete('data.destroy/{note}',[NoteController::class , 'destroy'])->name('data.destroy/');
Route::get('data.rabu',[NoteController::class , 'rabu'])->name('data.rabu');
Route::get('data.kamis',[NoteController::class , 'kamis'])->name('data.kamis');
Route::get('data.jumat',[NoteController::class , 'jumat'])->name('data.jumat');
Route::get('data.sabtu',[NoteController::class , 'sabtu'])->name('data.sabtu');
Route::get('data.minggu',[NoteController::class , 'minggu'])->name('data.minggu');
Route::post('data.store',[NoteController::class , 'store'])->name('data.store');
