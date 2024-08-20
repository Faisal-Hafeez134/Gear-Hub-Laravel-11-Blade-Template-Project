<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\CategorylistModel;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = CategorylistModel::get();
        $data = compact('categorys');
        return view('frontend.layouts.header')->with($data);
    }




}
