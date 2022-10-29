<?php

use App\Http\Controllers\TryController;
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
/* eto yung @getmapping() */
/* Route::get('url', [Controller::class, 'controller_method_name'])*/
Route::get('/', function (){
    return view('index');
});

Route::get('/note-list', function (){
    return view('notes.notes-list');
});

Route::get('/add-note', function (){
    return view('notes.add-notes');
});

Route::get('/edit-note', function (){
    return view('notes.edit-notes');
});

