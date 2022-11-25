<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Dingo\Api\Routing\Router;
use App\Controller\UserController;
use App\Controller\NotesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------user
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// To Save/Add User 
Route::post('saveUser', 'UserController@saveUser');

// To Login/Get User 
Route::post('loginUser', 'UserController@loginUser');

// To Save/Add Notes 
Route::post('saveNotes', 'NotesController@saveNotes');

// To Get Notes 
Route::get('getNotes', 'NotesController@getNotes');

// To Update Notes
Route::put('updateNotes/{id}', 'NotesController@updateNotes');

// To Delete Notes
Route::delete('deleteNotes/{id}', 'NotesController@deleteNotes');
