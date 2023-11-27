


@extends('layouts.adminlayout')

@section('Adminpage-content')

    <link rel="stylesheet" href="{{ asset('assets/css/appoinment_details.css') }}">


    <div id="appointment-container">

        <h3 class="mb-5">View Doctors Details</h3>

        <div id="table-container">
            <table id="appointment-table">
                <thead>
                    <tr>
                        <tr>
                            <th>Doctor Id</th>
                            <th>Doctor Name</th>
                            <th>Specialization</th>
                            <th>Gender</th>
                            <th>Phone NO</th>
                            <th>Channeling Room NO</th>
                            <th>Channeling Dates</th>
                            <th>Channeling Time</th>
                        </tr>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Cardiology</td>
                        <td>male</td>
                        <td>01168901</td>
                        <td>Dr. Smith</td>
                        <td>2023-11-26</td>
                        <td>10:30 AM</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>John Doe</td>
                        <td>Cardiology</td>
                        <td>male</td>
                        <td>01168901</td>
                        <td>Dr. Smith</td>
                        <td>2023-11-26</td>
                        <td>10:30 AM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
