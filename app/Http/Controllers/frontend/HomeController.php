<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\CategorylistModel;
use App\Models\frontend\HotdealprooductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('frontend.index');

    }

    /**
     * Show the form for creating a new resource.
     */

     public function add_hot_deal_product_index()
     {
        $works = HotdealprooductModel::where('type', 'Trending')->get();
        // $data = compact('works');
        $smartphone_tablets = HotdealprooductModel::where('category_name', 'Smartphone & Tablets')->get();
        //data for top category section in index file
        $top_category = CategorylistModel::orderBy('id', 'asc')->limit(5)->get();

        $Computer = HotdealprooductModel::where('category_name', 'Computer & Laptop')->get();


        $data = compact('works', 'smartphone_tablets','top_category','Computer');

         return view('frontend.index')->with($data);


     }

     //public function smartphone_tablet()
    //  {
    //     $smartphone_tablets = HotdealprooductModel::where('category_name', 'Smartphone & Tablets')->get();
    //     $dataa = compact('smartphone_tablets');
    //     return view('frontend.index')->with($dataa);

    //  }






}
