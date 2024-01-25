@extends('layouts.patienlayout')
@section('page-contend-patien')
    <link rel="stylesheet" href="{{ asset('assets/css/appoinment_details.css') }}">
    <div id="appointment-container">

        <h3 class="mb-5">All Appointment Details</h3>
        <!-- <label for="datetime-picker" class="lb">Select Date and Time:</label>
            <input type="datetime-local" id="datetime-picker"> -->
        <div class="col-lg-12">
            <div class="bg-white text-center rounded p-5">
                <h1 class="mb-4">View Appointment</h1>
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <select class="form-select bg-light border-0" style="height: 55px;">
                                <option selected>Choose Appoinment</option>

                                @foreach ($getpaymentdoctors as $getpaymentdoctor)
                                    <option value="{{ $getpaymentdoctor->id }}">{{ $getpaymentdoctor->patient_name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                    placeholder="Date" data-target="#date" data-toggle="datetimepicker"
                                    style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                    placeholder="Time" data-target="#time" data-toggle="datetimepicker"
                                    style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 bg-light" style="display: flex;">
                            <div class="btn-primary w-50 py-3 col-12 col-sm-6">Make An Appointment</div>
                            <div class="w-50 py-3">1</div>

                        </div>
                        <div class="col-12 col-sm-6 bg-light" style="display: flex;">
                            <div class="btn-primary w-50 py-3 col-12 col-sm-6">Make An Appointment</div>
                            <div class="w-50 py-3">12</div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="table-container">
            <table id="appointment-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Patient Name</th>

                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td>1</td>
                        <td>Name</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Name</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
