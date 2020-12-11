<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;

class DashboardController extends Model
{
    public function index(){
        return view('Admin.dashboard');
    }

    public function Activity(){
        $users = \\App\User::all();
        return view('welcome',compact('users'));    }
}
