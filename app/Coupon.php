<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
// use App\User;
// use Auth;

class Coupon extends Model
{
    protected $fillable = ['name','area','image','info','coupon','time','good'];

    // public function user(){
    //     return $this ->belongsToMany(User::class);
    // }
}
