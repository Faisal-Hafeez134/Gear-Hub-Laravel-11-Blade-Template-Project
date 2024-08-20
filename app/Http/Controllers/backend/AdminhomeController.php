<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AddproductModel;
use App\Models\frontend\OrderItemModel;
use App\Models\frontend\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = AddproductModel::get();
        // $orders = OrderModel::latest()->take(5)->get();
        // $joinedData = OrderItemModel::select('addproducts.id as product_id', 'addproducts.product_name', 'orders_items.price', 'orders_items.created_at')
        //             ->join('addproducts', 'orders_items.productId', '=', 'addproducts.id')
        //             ->get();



                    $orderItem = DB::table('addproduct')
                    ->join('orders_items', 'orders_items.productId','addproduct.id')
                    ->select('addproduct.product_name','addproduct.image1','addproduct.price','addproduct.quantity as product_quantity','addproduct.image1','orders_items.*')
                    ->orderBy('orders_items.created_at', 'desc')
                    ->limit(5)
                    ->get();


        $data = compact('product','orderItem');

        return view('backend.index')->with($data);
    }



    /**
     * Show the form for creating a new resource.
     */

}
