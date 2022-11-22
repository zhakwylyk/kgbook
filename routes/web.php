<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'postvseknigi'])->name('postvseknigi');



//////////////////////////////////////////////////////////////////
//Category GRUD
// Все категории

Route::get('admin-panel/category', [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('category');
Route::get('admin-panel/category', [App\Http\Controllers\admin\CategoryController::class,
 'category'])->name('category');
 // Добавить Категории
Route::get('admin-panel/addcategory', function () { 
    return view('admin-panel/addcategory');});
Route::post('admin-panel/addcategory/submit', [App\Http\Controllers\admin\CategoryController::class, 
'addcategory'])->name('addcategory');
// Удалить запис
Route::get('admin-panel/{id}/delete/category', [App\Http\Controllers\admin\CategoryController::class, 
'СategoryDelete'])->name('СategoryDelete');




//////////////////////////////////////////////////////////////////
//User GRUD 
Route::get('admin-panel/user', [App\Http\Controllers\admin\UserController::class, 
'user'])->name('user');
Route::get('admin-panel/user', [App\Http\Controllers\admin\UserController::class,
'UserPost'])->name('userPost');
Route::get('admin-panel/userupdate{id}', [App\Http\Controllers\admin\UserController::class, 
'UserUp'])->name('UserUp');
Route::post('admin-panel/userupdate{id}', [App\Http\Controllers\admin\UserController::class, 
'UserUpPrinimatEdit'])->name('UserUpPrinimatEdit');
Route::get('admin-panel/{id}/delete', [App\Http\Controllers\admin\UserController::class, 
'userDelete'])->name('userDelete');

//////////////////////////////////////////////////////////////////
//Post GRUD
// Все записи
Route::get('admin-panel/post', [App\Http\Controllers\admin\PostController::class, 
'postvseknigi'])->name('postvseknigi');
// Добавить запис
Route::get('admin-panel/addpost', function () { 
    return view('admin-panel/addpost');});
Route::post('admin-panel/addpost/submit', [App\Http\Controllers\admin\PostController::class, 
'addpost'])->name('addpost');
// Изменить запис
Route::get('admin-panel/postupdate{id}', [App\Http\Controllers\admin\PostController::class, 
'Uppost'])->name('Uppost');
Route::post('admin-panel/postupdate{id}', [App\Http\Controllers\admin\PostController::class, 
'PostUpPrinimatEdit'])->name('PostUpPrinimatEdit');
// Удалить запис
Route::get('admin-panel/{id}/delete/post', [App\Http\Controllers\admin\PostController::class, 
'PostDelete'])->name('PostDelete');







Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
