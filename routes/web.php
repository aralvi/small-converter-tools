<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
})->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('tool/{name}', [DocumentController::class, 'index'])->name('tools');
Route::post('image-to-pdf',[DocumentController::class, 'imageToPdf'])->name('image-to-pdf');
Route::post('image-format-change/{from},{to}',[DocumentController::class, 'changeImageFormat'])->name('change-image-format');
