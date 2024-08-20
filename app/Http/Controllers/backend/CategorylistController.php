<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\backend\CategorylistModel;
use Illuminate\Http\Request;

class CategorylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.category-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function categorylist()
    {
        $works = CategorylistModel::get();
        $data = compact('works');
        return view('backend.category-list')->with($data);
    }

}
