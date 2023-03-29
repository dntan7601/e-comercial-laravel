<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
class ProductController extends Controller
{
    function index() {
        $data = Product::all();
        return View('product',['products'=>$data]);
    }
    function detail($id) {
        $product = Product::find($id);
        if(!$product) {
            return 'Page Not Found';
        }else {
            return View('detailProduct',['product'=>$product]);

        }
    }

    function search(Request $req) {
        $data = Product::where('name', 'like', '%'. $req->input('query').'%')->get();
        return View('search',['products'=>$data]);
    }
    function add_to_cart(Request $req)  {
        if($req->session()->has('user')) {

            $cart = new Cart();
            //Lấy id của user đang thêm giỏ hàng thông qua session
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id; //Nhận từ name của thẻ input
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    
    static function  totalItems() {
        //Nếu không có Request thì dùng class session
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
}
