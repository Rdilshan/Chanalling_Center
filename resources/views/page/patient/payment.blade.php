
@extends('layouts.patienlayout')
@section('page-contend-patien')

<link rel="stylesheet" href="{{ asset('assets/css/doctor.css') }}">

<?php
$user = request('id');
$pay = request('pay');
?>
<!-- Contact Start -->
<form method="post" action="{{ url('submitFormpayment') }}">
    @csrf
        <div class="form-container">

            <h3 class="mb-5">Payment For Service</h3>

            <div class="form-group">
                <label for="Credit">Credit Cart Type</label>
                <select id="Credit" class="form-control bg-light border-0" name="whichtypePayment" required>
                    <option value="male">Master</option>
                    <option value="female">Visa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Cvv No">CVV Number</label>
                <input type="text" id="Cvv No" placeholder="Enter the Cvv number" name="cvv" class="form-control bg-light border-0" required>

            </div>

            <div class="form-group">
                <label for="ExpireDate">Expire Date</label>
                <input type="date" id="ExpireDate" name="ExpireDate" class="form-control bg-light border-0" required>
            </div>

            <div class="form-group">
                <label for="BankingName">Banking Name</label>
                <input type="text" id="BankingName" placeholder="Enter the Banking Name"
                    class="form-control bg-light border-0" name="bankname" required>
            </div>
            <div class="form-group">
                <label for="Cardholder">Card Holder Name</label>
                <input type="text" id="Cardholder" placeholder="Cardholder" name="cardholdername" class="form-control bg-light border-0" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" id="Cvv No" placeholder="Enter the amount" name="amount" class="form-control bg-light border-0" value="{{ $payment }}" readonly>

            </div>
            <input type="hidden" name="user" value="{{$user}}">

            <div class="button-container">
                <button type="button" class="btn btn-primary" onclick="goBack()"> Back</button>
                <button type="submit" class="btn btn-primary"> Save</button>
                <button type="reset" class="btn btn-primary"> Clear</button>
            </div>
        </div>
</form>
<!-- Contact End -->
@endsection
