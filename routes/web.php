<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactsController;
use App\Mail\ContactMassageCreate;

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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'home'])->name('root_path');
Route::get('/about', [PagesController::class, 'about'])->name('about_path');
Route::get('/contact', [ContactsController::class, 'create'])->name('contact_path');
Route::get('/test-email', function () {
    return new ContactMassageCreate("Diadie", "dioux86@gmail.ca", "Je vous remercie pour laracarte");
});
