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
// Queue's job testing
Route::get('/', function() {
  App\Jobs\SendMessage::dispatch('Test Message');
});


Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact.create');
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');


