<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Coupon;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function list(){
        $user_id= Auth::id();
        $coupons = User::find($user_id)->coupons();
        return view('users.list',['coupons'=>$coupons]);
    }
}
