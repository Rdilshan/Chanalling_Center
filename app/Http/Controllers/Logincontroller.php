<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function handleLoginData(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');

        if ($role == '1') {

            $login = Admin::where('passward', '=', $password)
                ->where('email', '=', $email)
                ->get();
            $goto = 'adminDashboard';

        } elseif ($role == '2') {
            $login = Patient::where('passward', '=', $password)
                ->where('email', '=', $email)
                ->get();
                $goto = 'patien';

        } elseif ($role == '3') {
            $login = Doctor::where('passward', '=', $password)
                ->where('email', '=', $email)
                ->get();
                $goto = 'Doctor';

        }
        if ($login->isNotEmpty()) {

            $id = $login->first()->id;
            // dd($id);
            $request->session()->put('id', $id);
            $request->session()->put('Is_login', 'yes');

            return redirect("/successfull?successMessage=Login%20successful&goto={$goto}&check=success&msg=success");

         }else{
            $goto='Login';
            $request->session()->put('Is_login', 'no');
            return redirect("/successfull?successMessage=Try%20Again&goto={$goto}&check=error&msg=Login%20Incorrect");

         }



    }


    public function dashboardcheckingISlogin(Request $request){

        $id = $request->session()->get('id');
        $Is_login = $request->session()->get('Is_login');
        return view('page.admin.admin', compact('id', 'Is_login'));

    }

    public function DoctoringISlogin(Request $request){

        $id = $request->session()->get('id');
        $Is_login = $request->session()->get('Is_login');
        return view('page.doctor.dashboard', compact('id', 'Is_login'));

    }

    public function patieningISlogin(Request $request){

        $id = $request->session()->get('id');
        $Is_login = $request->session()->get('Is_login');
        return view('page.patient.dashboard', compact('id', 'Is_login'));

    }

}
