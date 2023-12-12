<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        //fungsi index
        return view('admin.dashboard'); //mengarahkan ke dashboard yang ada didalam admin
    }
}
