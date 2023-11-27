
@extends('layouts.patienlayout')
@section('page-contend-patien')

<link rel="stylesheet" href="{{ asset('assets/css/doctor.css') }}">
<!-- Contact Start -->
<div class="form-container">

    <h3 class="mb-5">Payment For Service</h3>

    <div class="form-group">
        <label for="Credit">Credit Cart Type</label>
        <select id="Credit" class="form-control bg-light border-0">
            <option value="male">Master</option>
            <option value="female">Visa</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Cvv No">CVV Number</label>
        <input type="text" id="Cvv No" placeholder="Enter the Cvv number" class="form-control bg-light border-0">

    </div>

    <div class="form-group">
        <label for="ExpireDate">Expire Date</label>
        <input type="date" id="ExpireDate" class="form-control bg-light border-0">
    </div>

    <div class="form-group">
        <label for="BankingName">Banking Name</label>
        <input type="text" id="BankingName" placeholder="Enter the Banking Name"
            class="form-control bg-light border-0">
    </div>
    <div class="form-group">
        <label for="Cardholder">Card Holder Name</label>
        <input type="text" id="Cardholder" placeholder="Cardholder" class="form-control bg-light border-0">
    </div>
    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" id="Cvv No" placeholder="Enter the amount" class="form-control bg-light border-0">

    </div>

    <div class="button-container">
        <button class="btn btn-primary"> Back</button>
        <button class="btn btn-primary"> Save</button>
        <button class="btn btn-primary"> Clear</button>
    </div>
</div>
<!-- Contact End -->
@endsection
