<?php

use App\Http\Controllers\TestMailController;
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
/**
 * Appel du formulaire de contact
 */
Route::get('/contact', [TestMailController::class, 'index']);

/**
 * Destination du formulaire pour envoyer le mail
 */
Route::post('/mail', [TestMailController::class, 'sendMail']);
