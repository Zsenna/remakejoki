<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;

class productController extends Controller
{
    //
    function show()
    {
        $data = productModel::all();
        return view('product', ['product' => $data]);
    }
}
