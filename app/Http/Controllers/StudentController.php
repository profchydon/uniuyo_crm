<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function dashboard()
  {
      return view ('students.dashboard');
  }

  public function profile()
  {
      return view ('students.profile');
  }

}
