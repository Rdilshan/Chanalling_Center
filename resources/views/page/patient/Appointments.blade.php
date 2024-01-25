@extends('layouts.patienlayout')
@section('page-contend-patien')
    <link rel="stylesheet" href="{{ asset('assets/css/doctor.css') }}">
    <form method="POST" action="{{ url('addnewappoiment') }}">
        @csrf
        <div class="form-container">

            <h3 class="mb-5">Add New Appoinment</h3>
            <div class="form-group">
                <label for="patientName">Patient name</label>
                <input type="text" name="patientName" placeholder="Enter the Patient Name"
                    class="form-control bg-light border-0">
            </div>

            <div class="form-group">
                <label for="Specalization">Specalization</label>
                {{-- <input type="text" id="Specalization" placeholder="Enter the Specalization" class="form-control bg-light border-0"> --}}
                <select name="Specialization" onchange="change()" id="Specializationget"
                    class="form-control bg-light border-0">

                    @foreach ($specializations as $specialization)
                        <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="DoctorName">Doctor name</label>
                <select name="doctorSelect" onchange="changedoctor()" id="doctorSelect" class="form-control bg-light border-0">

                    <option value="null">Not Avaliable</option>

                </select>
            </div>



            <div class="form-group">
                <label for="changingDate">Challenging date</label>
                <input type="date" id="ChallengingDate" name="ChallengingDate" class="form-control bg-light border-0">
            </div>
            <div class="form-group">
                <label for="changingTime">Challenging time</label>
                <input type="time" id="ChallengingTime" name="ChallengingTime" class="form-control bg-light border-0">
            </div>

            {{-- <div class="form-group">
                <label for="Channelingroomnumber">Channeling room number</label>
                <input type="text" id="Channelingroomnumber" placeholder="Enter the Channeling Room Number"
                    class="form-control bg-light border-0">

            </div> --}}

            <div class="form-group">
                <label for="Chengingfees">Changing fees</label>
                <input type="text" id="Chengingfees" name="Chengingfees" placeholder="Changing Fees" class="form-control bg-light border-0">
            </div>


            <div class="button-container">
                <button type="button" class="btn btn-primary" onclick="goBack()"> Back</button>
                <button type="submit" class="btn btn-primary"> Save</button>
                <button type="reset" class="btn btn-primary"> Clear</button>

            </div>
        </div>
    </form>
    <script>
        function change() {
            var selectvalue = document.getElementById("Specializationget").value;

            var formData = new FormData();
            formData.append('selectedSpecialization', selectvalue);;

            fetch('/selecteddoctors', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                        console.log(data);

                        var doctors = data.doctors;

                        var doctorSelect = document.getElementById("doctorSelect");

                        doctorSelect.innerHTML = '';

                        var defaultOption = document.createElement("option");
                        defaultOption.value = "null";
                        defaultOption.text = "There are Doctor";
                        doctorSelect.appendChild(defaultOption);

                        doctors.forEach(function(doctor) {
                            var option = document.createElement("option");
                            option.value = doctor.id;
                            option.text = doctor.Full_name;
                            doctorSelect.appendChild(option);
                        });

                    }

                )
                .catch(error => console.error('Error:', error));

        }


        function changedoctor(){
            var selectvalue = document.getElementById("doctorSelect").value;

            var formData = new FormData();
            formData.append('selectedDoctor', selectvalue);;

            fetch('/selecteddoctorsname', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                        console.log(data);
                        var doctors = data.doctors;

                        var ChallengingDate = document.getElementById("ChallengingDate");
                        var ChallengingTime = document.getElementById("ChallengingTime");
                        var Chengingfees = document.getElementById("Chengingfees");

                        ChallengingDate.value= doctors[0].ChangingDate;
                        ChallengingTime.value= doctors[0].ChangingTime;
                        Chengingfees.value= doctors[0].Fees;

                    }

                )
                .catch(error => console.error('Error:', error));

        }
    </script>
@endsection
