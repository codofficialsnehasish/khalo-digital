<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class Dashboard extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
}
