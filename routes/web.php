<?php

use App\Http\Controllers\postController;
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
Route::get('/post',[postController::class,'loadposts']);
Route::get('/add/post',[postController::class,'loadadduserform']);
Route::post('/add/post',[postController::class,'AddUser'])->name('AddUser');
Route::get('/edit/{id}',[postController::class,'LoadEditForm']);
Route::get('/delete/{id}',[postController::class,'DeleteUserForm']);
Route::post('/edit/post',[postController::class,'EditUser'])->name('EditUser');
