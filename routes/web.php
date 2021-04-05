<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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
// Contact Form Queue based sending
Route::redirect('/', '/contact-us');
Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact.create');
Route::post('/ship-message', [ContactController::class, 'shipEmail'])->name('contact.ship');


