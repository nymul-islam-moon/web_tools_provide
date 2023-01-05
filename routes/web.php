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
use App\Http\Controllers\ShellsController;
use App\Http\Controllers\SshWhmsController;
use App\Http\Controllers\CpanelsController;
use App\Http\Controllers\RdpsController;
use App\Http\Controllers\RequestedProductController;




// Product
//Route::group(['prefix' => '/product','as' => 'product.',], function () {



Route::get('/x', function () {
   return view('test');
});


Route::get('/mailer', [MailerController::class, 'mailer'])->name('mailer');
Route::post('/add-mailer', [MailerController::class, 'saveMailer'])->name('add.mailer');
Route::post('/delete-mailer/{id}', [MailerController::class, 'deleteMailer'])->name('delete.mailer');
Route::get('/edit-mailer/{id}', [MailerController::class, 'editMailer'])->name('edit.mailer');
Route::post('/add-edit-mailer', [MailerController::class, 'saveEditMailer'])->name('add.edit.mailer');

Route::get('/webmail', [WebmailController::class, 'webMail'])->name('webmail');
Route::post('/add-webmail', [WebmailController::class, 'saveWebMail'])->name('add.webMail');
Route::post('/delete-webMail/{id}', [WebmailController::class, 'deleteWebMail'])->name('delete.webMail');
Route::get('/edit-webMail/{id}', [WebmailController::class, 'editWebMail'])->name('edit.webMail');
Route::post('/add-edit-webMail', [WebmailController::class, 'saveEditWebMail'])->name('add.edit.webMail');


Route::get('/smtp', [SMTPController::class, 'smtp'])->name('smtp');
Route::post('/add-smtp', [SMTPController::class, 'saveSmtp'])->name('add.smtp');
Route::post('/delete-smtp/{id}', [SMTPController::class, 'deleteSmtp'])->name('delete.smtp');
Route::get('/edit-smtp/{id}', [SMTPController::class, 'editSmtp'])->name('edit.smtp');
Route::post('/add-edit-smtp', [SMTPController::class, 'saveEditSmtp'])->name('add.edit.smtp');


Route::get('/card', [CardController::class, 'card'])->name('card');
Route::post('/add-card', [CardController::class, 'saveCard'])->name('add.card');
Route::post('/delete-card/{id}', [CardController::class, 'deleteCard'])->name('delete.card');
Route::get('/edit-card/{id}', [CardController::class, 'editCard'])->name('edit.card');
Route::post('/add-card-smtp', [CardController::class, 'saveEditCard'])->name('add.edit.card');


Route::get('/lead', [LeadController::class, 'lead'])->name('lead');
Route::post('/add-lead', [LeadController::class, 'saveLead'])->name('add.lead');
Route::post('/delete-lead/{id}', [LeadController::class, 'deleteLead'])->name('delete.lead');
Route::get('/edit-lead/{id}', [LeadController::class, 'editLead'])->name('edit.lead');
Route::post('/add-lead-smtp', [LeadController::class, 'saveEditLead'])->name('add.edit.lead');

//---------------Lufix Controller--------------//
Route::get('/', [LufixController::class, 'lufixIndex'])->name('lufix');
Route::post('/saveLufix', [LufixController::class, 'saveLufix'])->name('saveLufix');
Route::post('/deleteLufix', [LufixController::class, 'deleteLufix'])->name('deleteLufix');
Route::post('/updateLufix', [LufixController::class, 'updateLufix'])->name('updateLufix');
Route::get('/editLufix/{id}', [LufixController::class, 'editLufix'])->name('editLufix');

//---------------Account Controller--------------//
Route::get('/account', [AccountController::class, 'accountIndex'])->name('account');
Route::post('/saveAccount', [AccountController::class, 'saveAccount'])->name('saveAccount');
Route::post('/deleteAccount', [AccountController::class, 'deleteAccount'])->name('deleteAccount');
Route::post('/updateAccount', [AccountController::class, 'updateAccount'])->name('updateAccount');
Route::get('/editAccount/{id}', [AccountController::class, 'editAccount'])->name('editAccount');

//---------------Script Controller--------------//
Route::get('/script', [ScriptController::class, 'scriptIndex'])->name('script');
Route::post('/saveScript', [ScriptController::class, 'saveScript'])->name('saveScript');
Route::post('/deleteScript', [ScriptController::class, 'deleteScript'])->name('deleteScript');
Route::post('/updateScript', [ScriptController::class, 'updateScript'])->name('updateScript');
Route::get('/editScript/{id}', [ScriptController::class, 'editScript'])->name('editScript');

//---------------Letter Controller--------------//
Route::get('/letter', [LetterController::class, 'letterIndex'])->name('letter');
Route::post('/saveLetter', [LetterController::class, 'saveLetter'])->name('saveLetter');
Route::post('/deleteLetter', [LetterController::class, 'deleteLetter'])->name('deleteLetter');
Route::post('/updateLetter', [LetterController::class, 'updateLetter'])->name('updateLetter');
Route::get('/editLetter/{id}', [LetterController::class, 'editLetter'])->name('editLetter');

//---------------Tutorial Controller--------------//
Route::get('/tutorial', [TutorialController::class, 'tutorialIndex'])->name('tutorial');
Route::post('/saveTutorial', [TutorialController::class, 'saveTutorial'])->name('saveTutorial');
Route::post('/deleteTutorial', [TutorialController::class, 'deleteTutorial'])->name('deleteTutorial');
Route::post('/updateTutorial', [TutorialController::class, 'updateTutorial'])->name('updateTutorial');
Route::get('/editTutorial/{id}', [TutorialController::class, 'editTutorial'])->name('editTutorial');

//--------------- Requested Product----------------//
Route::get('requested-product',[RequestedProductController::class,'RequestedProduct'])->name('requested.product');
Route::post('requested-product',[RequestedProductController::class,'saveRequestedProduct'])->name('requested.product');
Route::get('manage-requested-product',[RequestedProductController::class,'manageRequestedProduct'])->name('manage.requested.product');
Route::get('change.status/{id}',[RequestedProductController::class,'changeStatus'])->name('change.status');

//});
// End Product

Route::resource('/product/shells',ShellsController::class);
Route::resource('/product/cpanels',CpanelsController::class);
Route::resource('/product/rdps',RdpsController::class);
Route::resource('/product/sshwhm',SshWhmsController::class);



