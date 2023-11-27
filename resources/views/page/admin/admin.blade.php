@extends('layouts.adminlayout')

@section('Adminpage-content')
    <div class="admin_page">
        <div class="left-section">
            <div class="square_top">
                <div class="square" id="doctorsCountSquare">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <h2>Doctors Count</h2>
                    <div class="count" id="doctorsCount">12</div>
                </div>

                <div class="square" id="patientsCountSquare">
                    <div class="icon-wrapper">
                        <i class="fa-brands fa-servicestack"></i>
                    </div>
                    <h2>Patients Count</h2>
                    <div class="count" id="patientsCount">27</div>
                </div>
            </div>

            <div class="square_bottom">
                <div class="square" id="availableServicesSquare">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-bed-pulse"></i>
                    </div>
                    <h2>Available Services</h2>
                    <div class="count" id="availableServicesCount">19</div>
                </div>

                <div class="square" id="offersAvailableSquare">
                    <div class="icon-wrapper">
                        <i class="fa-brands fa-free-code-camp"></i>
                    </div>
                    <h2>Offers Available</h2>
                    <div class="count" id="offersAvailableCount">8</div>
                </div>
            </div>
        </div>

        <div class="right-section">
            <div class="wrapper">
                <header>
                    <p class="current-date"></p>
                    <div class="icons">
                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                    </div>
                </header>
                <div class="calendar">
                    <ul class="weeks">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                    </ul>
                    <ul class="days"></ul>
                </div>
            </div>
        </div>
    </div>
@endsection
