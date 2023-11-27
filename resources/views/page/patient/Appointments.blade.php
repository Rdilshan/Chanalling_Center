@extends('layouts.patienlayout')
@section('page-contend-patien')

<link rel="stylesheet" href="{{ asset('assets/css/doctor.css') }}">

    <div class="form-container">

        <h3 class="mb-5">Add New Appoinment</h3>
        <div class="form-group">
            <label for="patientName">Patient name</label>
            <input type="text" id="patientName" placeholder="Enter the Patient Name" class="form-control bg-light border-0">
        </div>

        <div class="form-group">
            <label for="DoctorName">Doctor name</label>
            <input type="text" id="DoctorName" placeholder="Enter the Doctor Name" class="form-control bg-light border-0">
        </div>

        <div class="form-group">
            <label for="Specalization">Specalization</label>
            <input type="text" id="Specalization" placeholder="Enter the Specalization" class="form-control bg-light border-0">
        </div>

        <div class="form-group">
            <label for="changingDate">Changing date</label>
            <input type="date" id="changingDate" class="form-control bg-light border-0">
        </div>
        <div class="form-group">
            <label for="changingTime">Changing time</label>
            <input type="time" id="changingTime" class="form-control bg-light border-0">
        </div>

        <div class="form-group">
            <label for="Channelingroomnumber">Channeling room number</label>
            <input type="text" id="Channelingroomnumber" placeholder="Enter the Channeling Room Number" class="form-control bg-light border-0">

        </div>

        <div class="form-group">
            <label for="Chengingfees">Changing fees</label>
            <input type="text" id="Chengingfees" placeholder="Changing Fees" class="form-control bg-light border-0">
        </div>


        <div class="button-container">
            <button class="btn btn-primary" > Back</button>
            <button class="btn btn-primary" > Save</button>
            <button class="btn btn-primary" > Clear</button>

        </div>
    </div>

@endsection
