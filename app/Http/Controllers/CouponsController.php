<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Auth;
use App\User;
use DB;
use Session;

class CouponsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::table('users')->where('premium',1)->get();
        // dd($users);

        $user = DB::table('users')->where('id', Auth::id())->where('premium', 1)->get();
        // dd($user);
        // このemptyファンクション
        if(!$user->isEmpty()){
            $coupons = Coupon::all();
            return view('coupons.index')->with('coupons',$coupons);
        }
            // $coupons = Coupon::inRandomOrder()->limit(0);
            // return view('coupons.index')->with('coupons',Coupon::take(3)->get());
            // $coupons = DB::table('coupons')->offset(1)
            //                                 ->limit(3)
            //

                $coupons = Coupon::take(3)->get();





        return view('coupons.index')->with('coupons',$coupons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
           'coupon'=>'required',
           'info'=>'required',
           'time'=>'required',
           'good'=>'required',
           'area'=>'required',
           'image'=>'required',
        ]);

        $user_id = Auth::id();

        $image =$request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/coupons/',$image_new_name);
        // $coupon->image ='uploads/coupons/'.$image_new_name;

        $coupon = Coupon::create([
        'name' => $request->name,
        'area' => $request->area,
        'info' => $request->info,
        'good' => $request->good,
        'time' => $request->time,
        'coupon' => $request->coupon,
        // 'user_id'=>$user_id,
        // 'coupon_id' => $request->coupon_id,
        'image'=> 'uploads/coupons/'.$image_new_name,
        ]);




        // $coupon->save();
            // オースから直接
        $coupon->users()->attach($user_id);
        return redirect()->route('coupons.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Coupon $coupon)
    {
        return view('coupons.show',['coupon'=>$coupon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Coupon $coupon)
    {
        return view('coupons.edit',['coupon' =>$coupon]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $this->validate(request(),[
            'name'=>'required',
            'coupon'=>'required',
            'info'=>'required|min:200',
            'time'=>'required',
            'good'=>'required',
            'area'=>'required',
            'image'=>'required|image',
         ]);

         if($request->hasFile('image'))
         {
            $coupon_image =$request->image;
            $coupon_image_new_name = time().$coupon_image->getClientOriginalName();
            $coupon_image->move('uploads/coupons',$coupon_image_new_name);
            // $coupon->move('uploads/coupons',$coupon_image_new_name);
            $coupon->save();
         }

         $coupon->name = $request ->name;
         $coupon->area = $request ->area;
         $coupon->info = $request ->info;
         $coupon->good = $request ->good;
         $coupon->time = $request ->time;
         $coupon->coupon = $request ->coupon;
         $coupon->save();

         return redirect()->route('coupons.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Coupon $coupon)
    {
        // $coupon=Coupon::find();
        $coupon->delete();
        $coupon->save();

        return redirect()->route('coupons.index');
    }

    public function show2($id)
    {
        $coupon=Coupon::find($id);
        $user_id = Auth::id();
        $coupon->users()->attach($user_id);
        return view('coupons.show2',['coupon'=>$coupon]);
    }

    // $upload=Upload::find($id);
    // return view('upload.edit',['upload'=>$upload]);

    public function new()
    {
        $name=['name'=>'jk'];
        return view('coupons.new',$name);
    }
    public function restaurant(){
        return view('restaurant.index');
    }

    public function list(){
        $user_id= Auth::id();
        $coupons = User::find($user_id)->coupons()->get();
       // dd($coupons);
       return view('users.list',['coupons'=>$coupons]);
    }

    public function premium(){
        $user_id= Auth::id();
        // $coupons = User::find($user_id)->coupons()->get();
       // dd($coupons);
       return view('users.premium',['user_id'=>$user_id]);
    }


}
