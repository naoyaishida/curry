<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Coupon;

class UsersController extends Controller
{
    public function list(){
        return view('users.list');
    }
}
