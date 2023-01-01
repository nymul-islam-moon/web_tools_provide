<?php

use App\Http\Controllers\LufixController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\WebmailController;
use App\Http\Controllers\SMTPController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\TutorialController;


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::group(['prefix' => '/product', 'as' => 'product.',], function () {

Route::get('/', [LufixController::class, 'index'])->name('lufix.index');
Route::get('/mailer', [MailerController::class, 'mailer'])->name('mailer');
Route::get('/webmail', [WebmailController::class, 'webMail'])->name('webmail');
Route::get('/smtp', [SMTPController::class, 'smtp'])->name('smtp');
Route::get('/card', [CardController::class, 'card'])->name('card');
Route::get('/lead', [LeadController::class, 'lead'])->name('lead');

//---------------Account Controller--------------//
Route::get('/account', [AccountController::class, 'accountIndex'])->name('account');
Route::post('/saveAccount', [AccountController::class, 'saveAccount'])->name('saveAccount');
Route::post('/deleteAccount', [AccountController::class, 'deleteAccount'])->name('deleteAccount');
Route::get('/editAccount/{id}', [AccountController::class, 'editAccount'])->name('editAccount');
Route::post('/updateAccount', [AccountController::class, 'updateAccount'])->name('updateAccount');

//---------------Script Controller--------------//
Route::get('/script', [ScriptController::class, 'scriptIndex'])->name('script');
Route::post('/saveScript', [ScriptController::class, 'saveScript'])->name('saveScript');
Route::post('/deleteScript', [ScriptController::class, 'deleteScript'])->name('deleteScript');
Route::get('/editScript/{id}', [ScriptController::class, 'editScript'])->name('editScript');
Route::post('/updateScript', [ScriptController::class, 'updateScript'])->name('updateScript');

//---------------Letter Controller--------------//
Route::get('/letter', [LetterController::class, 'letterIndex'])->name('letter');
Route::post('/saveLetter', [LetterController::class, 'saveLetter'])->name('saveLetter');
Route::post('/deleteLetter', [LetterController::class, 'deleteLetter'])->name('deleteLetter');
Route::get('/editLetter/{id}', [LetterController::class, 'editLetter'])->name('editLetter');
Route::post('/updateLetter', [LetterController::class, 'updateLetter'])->name('updateLetter');

//---------------Tutorial Controller--------------//
Route::get('/tutorial', [TutorialController::class, 'tutorialIndex'])->name('tutorial');
Route::post('/saveTutorial', [TutorialController::class, 'saveTutorial'])->name('saveTutorial');
Route::post('/deleteTutorial', [TutorialController::class, 'deleteTutorial'])->name('deleteTutorial');
Route::get('/editTutorial/{id}', [TutorialController::class, 'editTutorial'])->name('editTutorial');
Route::post('/updateTutorial', [TutorialController::class, 'updateTutorial'])->name('updateTutorial');

//});
