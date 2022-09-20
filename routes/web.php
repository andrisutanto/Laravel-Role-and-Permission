<?php

use App\Http\Controllers\RoleController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('roles',RoleController::class);

//cuman bisa diakses oleh IT
// Route::controller(RoleController::class)->group(function(){
//     Route::get('/roles', 'index');
// });

//ini yang diberikan permission
// Route::controller(RoleController::class)->group(function(){
//     Route::get('/roles', 'index')->middleware('can:read role');

//     //coba untuk route yang lain
//     //Route::get('roles/create', 'create')->middleware('can: create role');

//     Route::get('roles/create', 'create');
// });
//tapi tidak menggunakan cara diatas, kita menggunakan controller