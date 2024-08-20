<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\AddproductModel;
use App\Models\frontend\CartModel;
use App\Models\frontend\OrderModel;
use App\Models\frontend\OrderItemModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
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

        return view('frontend.checkout')->with($data);
        // return view('frontend.checkout');
    }



    public function checkout(Request $request){


        $request->validate(
            [

                'fullname' => 'required',

                'email' => 'required',




            ]
        );

        if(session()->has('id')){

        $order = new OrderModel();
        $order->status="pending";
        $order->customerId=session()->get('id');
        $order->bill=$request->bill;
        $order->address=$request->address;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->fullname = $request->fullname;
        $order->city = $request->city;

        if($order->save())
        {
            $carts=CartModel::where('customerId',session()->get('id'))->get();
            foreach($carts as $item)
            {
                $product = AddproductModel::find($item->productId);

                $orderItem = new OrderItemModel();
                $orderItem->productId = $item->productId;
                $orderItem->quantity  = $item->quantity;
                $orderItem->price = $product->price;
                $orderItem->orderId = $order->id;
                $orderItem->save();

                $item->delete();


            }

        }



            return back()->with('success','Your order have been placed successfully');
        }
        else{
            return back()->with('error','Please Login  To System' );
        }


    }



}
