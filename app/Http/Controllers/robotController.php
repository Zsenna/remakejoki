<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\robot;

class robotController extends Controller
{
    //
    public function show(robot $robot, $id)
    {
        $data = $robot->find($id);
        return view('katalog.Product-robot')->with([
            'id' => $id,
            'itemImg' => $data->itemImg,
            'itemText' => $data->itemText,
            'itemDesc' => $data->itemDesc,
            'itemSpec' => $data->itemSpec,
        ]);
    }
}
