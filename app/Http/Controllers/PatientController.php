<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    protected $patient;
    public function __construct(){
        $this->patient = new Patient();
    }

    public function save(request $request){
        dd($request->all());
    }

    public function passthepayment(request $request){
        $id = $request->input('id');
        $getthedoctorid = DB::select("SELECT doctorid FROM booking WHERE id = ?", [$id]);

        $doctorid = $getthedoctorid[0]->doctorid;

        $getpaymentdoctor =DB::select("SELECT Fees FROM doctor WHERE id = ?", [$doctorid]);

        $payment = $getpaymentdoctor[0]->Fees;
        return view('page.patient.payment', ['payment' => $payment]);

    }

    public function paymentsave(request $request){
        // dd($request->all());

        $id = $request->input('user');

        $update =DB::update('update booking set payment = 1 where id = ?', [$id]);

        if ($update > 0) {

        $goto = 'viewAppoinmentPatien';
        return redirect("/successfull?successMessage=Added%20successful&goto={$goto}&check=success&msg=success");

        } else {
            $goto = 'viewAppoinmentPatien';
            return redirect("/successfull?successMessage=Try%20Again&goto={$goto}&check=error&msg=data%20Incorrect");

        }

    }
}
