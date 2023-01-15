<?php

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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RdpsController;
use App\Http\Controllers\RequestedProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\LufixServiceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceOrderController;
use App\Http\Controllers\ReportsController;

// Product
//Route::group(['prefix' => '/product','as' => 'product.',], function () {


Route::get('/test', function (){
    return view('test');
});

Route::controller(DashboardController::class)->prefix('/')->group(function () {
    Route::get('/', 'index')->name('dashboard.index');
});


Route::controller(MailerController::class)->prefix('/mailer')->group(function () {
    Route::get('/', 'index')->name('mailer.index');
    Route::post('/', 'store')->name('mailer.store');
    Route::get('/{mailer}/edit', 'edit')->name('mailer.edit');
    Route::put('/{mailer}/update', 'update')->name('mailer.update');
    Route::delete('/{mailer}/destroy', 'destroy')->name('mailer.destroy');
});


Route::controller(WebmailController::class)->prefix('/webmail')->group(function () {
    Route::get('/', 'webMail')->name('webmail');
    Route::post('/add-webmail', 'saveWebMail')->name('add.webMail');
    Route::post('/delete-webMail/{id}', 'deleteWebMail')->name('delete.webMail');
    Route::get('/edit-webMail/{id}', 'editWebMail')->name('edit.webMail');
    Route::post('/add-edit-webMail', 'saveEditWebMail')->name('add.edit.webMail');
});

Route::controller(SMTPController::class)->prefix('/smtp')->group(function () {
    Route::get('/', 'smtp')->name('smtp');
    Route::post('/add-smtp', 'saveSmtp')->name('add.smtp');
    Route::post('/delete-smtp/{id}', 'deleteSmtp')->name('delete.smtp');
    Route::get('/edit-smtp/{id}', 'editSmtp')->name('edit.smtp');
    Route::post('/add-edit-smtp', 'saveEditSmtp')->name('add.edit.smtp');
});

Route::controller(CardController::class)->prefix('/card')->group(function () {
    Route::get('/', 'index')->name('card.index');
    Route::post('/', 'store')->name('card.store');
    Route::get('/{card}/edit', 'edit')->name('card.edit');
    Route::put('/{card}/update', 'update')->name('card.update');
    Route::delete('/{card}/destroy', 'destroy')->name('card.destroy');
});

Route::controller(LeadController::class)->prefix('/leads')->group(function () {
    Route::get('/', 'lead')->name('lead');
    Route::post('/create', 'create')->name('create.lead');
    Route::post('/delete-lead/{id}', 'deleteLead')->name('delete.lead');
    Route::get('/edit-lead/{id}', 'editLead')->name('edit.lead');
    Route::post('/add-lead-smtp', 'saveEditLead')->name('add.edit.lead');
});


//---------------Lufix Service Controller--------------//
Route::controller(LufixServiceController::class)->prefix('/lufix')->group(function () {
    Route::get('/', 'lufixIndex')->name('lufix');
    Route::post('/saveLufix', 'saveLufix')->name('saveLufix');
    Route::post('/deleteLufix', 'deleteLufix')->name('deleteLufix');
    Route::post('/updateLufix', 'updateLufix')->name('updateLufix');
    Route::get('/editLufix/{id}', 'editLufix')->name('editLufix');
});

//---------------Account Controller--------------//
Route::controller(AccountController::class)->prefix('/account')->group(function () {
    Route::get('/', 'index')->name('account.index');
    Route::post('/', 'store')->name('account.store');
    Route::get('/{account}/edit', 'edit')->name('account.edit');
    Route::put('/{account}/update', 'update')->name('account.update');
    Route::delete('/{account}/destroy', 'destroy')->name('account.destroy');
});

//---------------Script Controller--------------//
Route::controller(ScriptController::class)->prefix('/script')->group(function () {
    Route::get('/', 'scriptIndex')->name('script');
    Route::post('/saveScript', 'saveScript')->name('saveScript');
    Route::post('/deleteScript', 'deleteScript')->name('deleteScript');
    Route::post('/updateScript', 'updateScript')->name('updateScript');
    Route::get('/editScript/{id}', 'editScript')->name('editScript');
});


//---------------Letter Controller--------------//
Route::controller(LetterController::class)->prefix('/letter')->group(function () {
    Route::get('/', 'letterIndex')->name('letter');
    Route::post('/saveLetter', 'saveLetter')->name('saveLetter');
    Route::post('/deleteLetter', 'deleteLetter')->name('deleteLetter');
    Route::post('/updateLetter', 'updateLetter')->name('updateLetter');
    Route::get('/editLetter/{id}', 'editLetter')->name('editLetter');
});


//---------------Tutorial Controller--------------//
Route::controller(TutorialController::class)->prefix('/tutorial')->group(function () {
    Route::get('/', 'tutorialIndex')->name('tutorial');
    Route::post('/saveTutorial', 'saveTutorial')->name('saveTutorial');
    Route::post('/deleteTutorial', 'deleteTutorial')->name('deleteTutorial');
    Route::post('/updateTutorial', 'updateTutorial')->name('updateTutorial');
    Route::get('/editTutorial/{id}', 'editTutorial')->name('editTutorial');
});


// Sales Groups

//---------------Sales Controller--------------//
Route::controller(SaleController::class)->prefix('/sale')->group(function () {
    Route::get('/', 'saleIndex')->name('sale.index');
});

//---------------Withdraw Controller--------------//
Route::controller(WithdrawController::class)->prefix('/withdraw')->group(function () {
    Route::get('/', 'withdrawIndex')->name('withdraw.index');
});

// Reports
Route::controller(ReportsController::class)->prefix('/reports')->group(function () {
    Route::get('/', 'index')->name('report.index');
});


//--------------- Requested Product----------------//
Route::controller(RequestedProductController::class)->prefix('/requested-product')->group(function () {
Route::get('/',  'RequestedProduct')->name('requested.product');
Route::post('requested-product',  'saveRequestedProduct')->name('requested.product');
Route::get('manage-requested-product',  'manageRequestedProduct')->name('manage.requested.product');
Route::get('change.status/{id}',  'changeStatus')->name('change.status');
});

// ------------ Pending Reports -------------------//
Route::controller(ReportController::class)->prefix('/pending-reports')->group(function () {
    Route::get('/',  'pendingReports')->name('pending.reports');
    Route::post('add-pending-reports',  'savePendingReports')->name('add.pending.reports');
});

// ------------ Closed Reports -------------------//
Route::controller(ReportController::class)->prefix('/closed-reports')->group(function () {
    Route::get('/',  'closedReports')->name('closed.reports');
    Route::post('add-closed-reports',  'saveClosedReports')->name('add.closed.reports');
});

// ------------ Pending Service Orders -------------------//
Route::controller(ServiceOrderController::class)->prefix('/pending-service-orders')->group(function () {
    Route::get('/',  'pendingServiceOrder')->name('pending.service.order');
    Route::post('add-pending-service-order',  'savePendingServiceOrder')->name('add.pending.service.order');
});

// ------------ Closed Service Orders -------------------//
Route::controller(ServiceOrderController::class)->prefix('/closed-service-orders')->group(function () {
    Route::get('/',  'closedServiceOrder')->name('closed.service.order');
    Route::post('add-closed-service-order',  'saveClosedServiceOrder')->name('add.closed.service.order');
});

Route::resource('/product/shells', ShellsController::class);
Route::resource('/product/cpanels', CpanelsController::class);
Route::resource('/product/rdps', RdpsController::class);
Route::resource('/product/sshwhm', SshWhmsController::class);


