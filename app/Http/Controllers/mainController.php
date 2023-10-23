<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mainModel;

class mainController extends Controller
{
    //
    function showmain()
    {
        $data = mainModel::where('itemTo', 'mainp')->get();
        return view('home', ['mainbox' => $data]);
    }

    function showtraining()
    {
        $data = mainModel::where('itemTo', 'training')->get();
        return view('training', ['mainbox' => $data]);
    }

    function showcompro()
    {
        $data = mainModel::where('itemTo', 'comprofile')->get();
        return view('compro', ['mainbox' => $data]);
    }

    function showproduct()
    {
        $data = mainModel::where('itemTo', 'prod')->get();
        return view('product', ['mainbox' => $data]);
    }

    function showhighlight()
    {
        $data = mainModel::where('itemTo', 'highl')->get();
        return view('highlight', ['mainbox' => $data]);
    }
}
