<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // function to show the admin dashboard
    public function dashboard(){
        return view('backend.admin.index');
    }
}
