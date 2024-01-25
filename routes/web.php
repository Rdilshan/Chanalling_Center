<?php

use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\DoctorController;


Route::get('/', function () {
    return view('page.index');
});

Route::get('/Login', function () {
    return view('page.Login');
});

Route::get('/adminDashboard', function () {
    return view('page.admin.admin');
});

Route::get('/Registation', function () {
    return view('page.Registation');
});

Route::get('/addDoctor', function () {
    return view('page.admin.add_doctor');

});

Route::get('/viewAppoinment', function () {
    return view('page.admin.view_appoinment');
});

Route::get('/viewDoctor', function () {
    return view('page.admin.view_doctor');
});

Route::get('/Doctor', function () {
    return view('page.doctor.dashboard');
});

Route::get('/patien', function () {
    return view('page.patient.dashboard');
});

Route::get('/AddAppoinment', function () {
    return view('page.patient.Appointments');
});

Route::get('/payment', function () {
    return view('page.patient.payment');
});

Route::get('/viewAppoinmentPatien', function () {
    return view('page.patient.View_Appointments');
});


Route::get('/successfull', function () {
    return view('page.altet.successfull');
});

// function start here

Route::post('/logindata', [Logincontroller::class, 'handleLoginData']);
Route::post('/addnewdoctordata', [DoctorController::class, 'addnewdoctor']);
Route::post('/addnewappoiment', [AppoinmentController::class, 'addnewappoiment']);
Route::post('/selecteddoctors', [DoctorController::class, 'selecteddoctors']);
Route::post('/selecteddoctorsname', [DoctorController::class, 'selecteddoctorsname']);




// loginchecking
Route::get('/adminDashboard', [Logincontroller::class, 'dashboardcheckingISlogin']);
Route::get('/patien', [Logincontroller::class, 'patieningISlogin']);
Route::get('/Doctor', [Logincontroller::class, 'DoctoringISlogin']);


// datapass for page


Route::get('/addDoctor', [DoctorController::class, 'getSpecialization']);
Route::get('/viewDoctor',[DoctorController::class,'getalldoctor']);
Route::get('/AddAppoinment',[DoctorController::class,'getSpecializationfor']);


//handle payment page

Route::get('/payment',[PatientController::class,'passthepayment']);
Route::post('/submitFormpayment',[PatientController::class,'paymentsave']);

