<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSignupLoginController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ClientDetailController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Admin', [AdminController::class, 'adminhome']);

//Admin Login
Route::get('/Adminregister',[AdminSignupLoginController::class,'adminregister']);
Route::post('/Adminregister2',[AdminSignupLoginController::class,'adminregisterdata']);
Route::get('/Adminlogin',[AdminSignupLoginController::class,'adminlogin']);
Route::post('/Adminlogin2',[AdminSignupLoginController::class,'adminlogindata']);
Route::get('/Resetpassword', [AdminSignupLoginController::class,'resetpassword']);
Route::post('/password/reset', [AdminSignupLoginController::class,'reset']);
Route::get('/Admin/logout', [AdminSignupLoginController::class,'adminLogout'])->name('admin.logout');


//Admin Services
Route::get('/Adminservices',[ServiceController::class,'adminservicesview']);
Route::get('/Adminserviceform',[ServiceController::class,'adminserviceform']);
Route::post('/Adminserviceform2', [ServiceController::class, 'servicedata']);
Route::get('/Adminservicetrash',[ServiceController::class,'servicetrash']);
Route::get('/service/delete/{id}',[ServiceController::class,'servicedelete'])->name('service.delete');
Route::get('/service/frocedelete/{id}',[ServiceController::class,'serviceforcedelete'])->name('service.forcedelete');
Route::get('/service/restore/{id}',[ServiceController::class,'servicerestore'])->name('service.restore');
Route::get('/service/edit/{id}',[ServiceController::class,'serviceedit'])->name('service.edit');
Route::post('/service/update/{id}',[ServiceController::class,'serviceupdate'])->name('service.update');

//Admin Inquiry Details
Route::get('/Admininquiry',[AdminController::class,'admininquiry']);

//Admin Intern Details
Route::get('/Adminintern',[AdminController::class,'adminintern']);

//Admin Career
Route::get('/Admincareer',[CareerController::class,'admincareerview']);
Route::get('/Admincareerform',[CareerController::class,'admincareerform']);
Route::post('/Admincareerform2', [CareerController::class, 'careerdata']);
Route::get('/Admincareertrash',[CareerController::class,'careertrash']);
Route::get('/career/delete/{id}',[CareerController::class,'careerdelete'])->name('career.delete');
Route::get('/career/frocedelete/{id}',[CareerController::class,'careerforcedelete'])->name('career.forcedelete');
Route::get('/career/restore/{id}',[CareerController::class,'careerrestore'])->name('career.restore');
Route::get('/career/edit/{id}',[CareerController::class,'careeredit'])->name('career.edit');
Route::post('/career/update/{id}',[CareerController::class,'careerupdate'])->name('career.update');

// Admin Client Details
Route::get('/Adminclientdetail',[ClientDetailController::class,'adminclientdetailview']);
Route::get('/Adminclientdetailform',[ClientDetailController::class,'adminclientdetailform']);
Route::post('/Adminclientdetailform2', [ClientDetailController::class, 'clientdetaildata']);
Route::get('/Adminclientdetailtrash',[ClientDetailController::class,'clientdetailtrash']);
Route::get('/clientdetail/delete/{id}',[ClientDetailController::class,'clientdetaildelete'])->name('clientdetail.delete');
Route::get('/clientdetail/frocedelete/{id}',[ClientDetailController::class,'clientdetailforcedelete'])->name('clientdetail.forcedelete');
Route::get('/clientdetail/restore/{id}',[ClientDetailController::class,'clientdetailrestore'])->name('clientdetail.restore');
Route::get('/clientdetail/edit/{id}',[ClientDetailController::class,'clientdetailedit'])->name('clientdetail.edit');
Route::post('/clientdetail/update/{id}',[ClientDetailController::class,'clientdetailupdate'])->name('clientdetail.update');


// Admin Certificate Details
Route::get('/Admincertificate',[CertificateController::class,'admincertificateview']);
