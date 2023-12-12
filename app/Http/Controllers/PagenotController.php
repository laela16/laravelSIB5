<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagenotController extends Controller
{
    //
    public function index(){
        //fungsi index
        return view('admin.pagenot'); //mengarahkan pagenot ke  yang ada didalam admin
    }
}
