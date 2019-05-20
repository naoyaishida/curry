<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('coupons', 'CouponsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/cart/add',[
//     'uses'=>'ShoppingController@add_to_cart',
//     'as'=>'cart.add'
// ]);

// Route::get('/cart',[
//     'uses'=> 'ShoppingController@cart',
//     'as'=>'cart'
// ]);

// Route::get('/cart/incr/{id}/{qty}',[
//     'uses'=> 'ShoppingController@incr',
//     'as'=>'cart.incr'
// ]);

Route::get('coupon',[
    'uses'=>'CouponsController@index',
    'as'=> 'coupon'
]);

// IDがないと動かない
Route::get('coupons/show2/{id}',[
    'uses'=>'CouponsController@show2',
    'as'=> 'coupons.show2'
]);

Route::get('new',[
'uses'=>'CouponsController@new',
'as'=>'new']);

Route::get('restaurant.index',[
    'uses'=>'CouponsController@restaurant',
    'as'=>'restaurant.index'
]);

// Route::name('coupons.get')->put('coupons/{coupon}/get','CouponsController@get');

Route::get('list',[
    'uses'=>'UsersController@list',
    'as'=>'list'
]);

// Route::get('/', function () {
//     return view('welcome', ['coupons' => App\Coupon::all(), 'users' => App\User::all()]);
// });

// Route::post('/', function () {
//     $coupon = new App\Coupon();
//     $coupon->body = request()->body;
//     $coupon->save();
//     $coupon->users()->attach(request()->users);
//     return redirect('/');
// });
