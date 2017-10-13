<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }

    public function faqs()
    {
        return view ('faqs');
    }

    public function login()
    {
        return view ('auth.login');
    }

    public function register()
    {
        return view ('auth.register');
    }
}
