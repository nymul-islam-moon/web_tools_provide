<?php

use App\Http\Controllers\LufixController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\WebmailController;
use App\Http\Controllers\SMTPController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\LeadController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [LufixController::class, 'index'])->name('lufix.index');
Route::get('/mailer', [MailerController::class, 'mailer'])->name('mailer');
Route::get('/webmail', [WebmailController::class, 'webMail'])->name('webmail');
Route::get('/smtp', [SMTPController::class, 'smtp'])->name('smtp');
Route::get('/card', [CardController::class, 'card'])->name('card');
Route::get('/lead', [LeadController::class, 'lead'])->name('lead');
