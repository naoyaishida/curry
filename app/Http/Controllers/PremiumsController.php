<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\Charge;
use App\User;
use Auth;

use Illuminate\Http\Request;

class PremiumsController extends Controller
{
    public function index(){
        return view('customer');
    }

    public function pay(){

        // シークレットAPIをセット

        Stripe::setApiKey("sk_test_YIofbcDzQCfySLTLZVOWqx6Y00lP45WzGp");

        $token = request()->stripeToken;
        $charge = Charge::create([
            'amount' => 100,
            'currency' => 'jpy',
            'description' =>'有料会員になる',
            'source' => $token,
        ]);

        $user = User::find(Auth::id());
        $user->premium = 1;
        $user->save();




        // Session::flash('success','Your purchase is successflly ');
        // Cart::destroy();

        // toで送る宛先をここで指定stripeで拾ってきくる　新しいクラスを作成してsendで拾う
        // Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccsessful);
        return redirect('/customer');
    }
}

