<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyaccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('frontend.my-account');
    // }

    public function index()
    {
        if(session()->has('id'))
        {
$orders = OrderModel::where('customerId',session()->get('id'))->get();

// $items = DB::table('products')
// ->join('order_items','order_items.productId','products.id')
// ->select('products.title','products.picture','order_items.*')
// ->get();


$data = compact('orders');
return view('frontend.my-account')->with($data);
        }

    }




}
