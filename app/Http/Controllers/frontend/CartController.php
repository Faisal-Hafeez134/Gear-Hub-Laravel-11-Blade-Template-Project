<?php

namespace App\Http\Controllers\frontend;
use App\Models\frontend\OrderModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\backend\AddproductModel;
use App\Models\frontend\CartModel;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cartItem = DB::table('addproduct')
        ->join('cart', 'cart.productId','addproduct.id')
        ->select('addproduct.product_name','addproduct.price','addproduct.quantity as product_quantity','addproduct.image1','cart.*')
        ->where('cart.customerid',session()->get('id'))
        ->get();




        $data = compact('cartItem');

        return view('frontend.cart')->with($data);
    }


    public function AddtoCart(Request $request)
    {


        if(session()->has('id')){


        $cart = new CartModel();
        $cart->quantity = $request->quantity;
        $cart->productId = $request->product_id;
        $cart->customerId = session()->get('id');




        $cart->save();
        return back()->with('success','Item added to cart successfully');
    }
    else{
        return back()->with('error','Please Login  To System' );
    }





    }






    //delete

    public function DeletecartItem($id)
    {

        $item = CartModel::find($id);
        $item->delete();
        return redirect()->back()->with('success','the item is deleted');



    }

    public function UpdateCart(Request $request)
    {


        if(session()->has('id')){


        $item =CartModel::find($request->id);
        $item->quantity = $request->quantity;





        $item->save();
        return back()->with('success','cart updated sucessfully');
    }
    else{
        return redirect('/login')->with('error','Please Login  To System' );
    }





    }



    }








