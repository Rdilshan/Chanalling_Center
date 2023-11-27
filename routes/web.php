<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;



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

Route::post('/Registationnewuser',[PatientController::class,'save']);

