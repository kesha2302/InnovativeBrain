<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSignupLoginController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ClientDetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Frontend
Route::get('/', [HomeController::class, 'home']);
Route::get('/service', [HomeController::class, 'Services']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

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
Route::get('/Admincertificateform',[CertificateController::class,'admincertificteform']);
Route::post('/Admincertificateform2', [CertificateController::class, 'certificatedata']);
Route::get('/Admincertificatetrash',[CertificateController::class,'certificatetrash']);
Route::get('/certificate/delete/{id}',[CertificateController::class,'certificatedelete'])->name('certificate.delete');
Route::get('/certificate/frocedelete/{id}',[CertificateController::class,'certificateforcedelete'])->name('certificate.forcedelete');
Route::get('/certificate/restore/{id}',[CertificateController::class,'certificaterestore'])->name('certificate.restore');
Route::get('/certificate/edit/{id}',[CertificateController::class,'certificateedit'])->name('certificate.edit');
Route::post('/certificate/update/{id}',[CertificateController::class,'certificateupdate'])->name('certificate.update');
