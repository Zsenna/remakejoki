<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ourProductModel;

class ourProductcontroller extends Controller
{
    //
    function showrobot()
    {
        $data = ourProductModel::where('itemText', 'robot')->get();
        return view('katalog/robot', ['ourproduct' => $data]);
    }

    function showagv()
    {
        $data = ourProductModel::where('itemText', 'agv')->get();
        return view('katalog/agv', ['ourproduct' => $data]);
    }

    function showplc()
    {
        $data = ourProductModel::where('itemText', 'plc')->get();
        return view('katalog/plc', ['ourproduct' => $data]);
    }

    function shownplc()
    {
        $data = ourProductModel::where('itemText', 'nplc')->get();
        return view('katalog/nplc', ['ourproduct' => $data]);
    }
}
