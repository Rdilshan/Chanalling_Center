@extends('layouts.adminlayout')

@section('Adminpage-content')

    <link rel="stylesheet" href="{{ asset('assets/css/doctor.css') }}">

    <div class="form-container">

        <h3 class="mb-5">Add new Doctors</h3>
        <div class="form-group">
            <label for="doctorId">Doctor Id</label>
            <input type="text" id="doctorId" placeholder="Enter the doctor Id"
                class="form-control bg-light border-0">

        </div>
        <div class="form-group">
            <label for="doctorName">Doctor Name</label>
            <input type="text" id="doctorName" placeholder="Enter Doctor Name"
                class="form-control bg-light border-0">
        </div>
        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="text" id="specialization" placeholder="What Specialization"
                class="form-control bg-light border-0">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" class="form-control bg-light border-0">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="text" id="phoneNumber" placeholder="Enter the Phone number"
                class="form-control bg-light border-0">

        </div>
        <div class="form-group">
            <label for="channelRoom">Channel Room number</label>
            <input type="text" id="channelRoom" placeholder="Enter Channel Room number"
                class="form-control bg-light border-0">
        </div>
        <div class="form-group">
            <label for="userName">User Name</label>
            <input type="text" id="userName" placeholder="Enter User Name" class="form-control bg-light border-0">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter Password" class="form-control bg-light border-0">
        </div>
        <div class="form-group">
            <label for="changingDate">Changing Date</label>
            <input type="date" id="changingDate" class="form-control bg-light border-0">
        </div>
        <div class="form-group">
            <label for="changingTime">Changing Time</label>
            <input type="time" id="changingTime" class="form-control bg-light border-0">
        </div>
        <div class="form-group">
            <label for="changingFees">Changing Fees</label>
            <input type="text" id="changingFees" placeholder="Changing Fees"
                class="form-control bg-light border-0">
        </div>

        <div class="button-container">
            <button class="btn btn-primary">Back</button>
            <button class="btn btn-primary"> Save</button>
            <button class="btn btn-primary"> Clear</button>
        </div>
    </div>

@endsection
