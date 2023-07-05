<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('admin.dashboard');
    }

    public function ContactMessage(){
        return view('admin.messages');
    }
}
