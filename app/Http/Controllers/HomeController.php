<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {

        return view('dashboard');
    }
    public function admin()
    {

        return view('admin/admin');
    }
}
