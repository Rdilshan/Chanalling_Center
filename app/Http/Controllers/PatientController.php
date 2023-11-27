<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    protected $patient;
    public function __construct(){
        $this->patient = new Patient();
    }

    public function save(request $request){
        dd($request->all());
    }
}
