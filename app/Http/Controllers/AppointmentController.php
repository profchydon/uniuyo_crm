<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public function bookAppointment ()
    {
        return redirect('student/dashboard')->with('message',"Your appointment application was successfully sent.");
    }

}
