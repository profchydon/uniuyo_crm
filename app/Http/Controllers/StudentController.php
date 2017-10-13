<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

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

  public function login()
  {
    // var_dump(Request);
    dd(Request()->password);
  }

  public function register()
  {

      Student::create(request(['firstName' , 'lastName' , 'email' , 'mobile' , 'regNo' , 'password' , 'department' , 'parentName' , 'parentMobile' , 'parentEmail']));

  }

  public function signin ()
  {
      auth()->login();

      return redirect()->home();
  }

}
