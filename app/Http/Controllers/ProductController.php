<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Product;
use\App\Models\Cart;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index()
    {
      $data= Product::all();
      return view('product',['products'=>$data]);
    }
    function detail($id)
    { 
       $data=Product::find($id);
       return view('detail',['products'=>$data]);
    }
    function AddtoCart(Request $req)
    {
        if($req->session()->has('user'))
        {
          $cart  =  new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');
        }
        else
        {
          return redirect('login');   
        }    
    }
     static function Cartitem()
    {
      $userid = session()->get('user')['id'];
      return Cart::where('user_id',$userid)->count();
    }
    function Cartdetail()
    {
      $userid = session()->get('user')['id'];
      
       $data=DB::table('cart')->join('products','cart.product_id','products.id')
      ->select('products.*','cart.id as cart_id')->where('cart.user_id',$userid)->get();

      return view('/cartlist',['products'=>$data]);

    }
    function RemovefromCart($id)
    {
      Cart::destroy($id);
      return redirect('/');
    }
}
