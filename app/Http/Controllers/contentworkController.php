<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\content;

class contentworkController extends Controller
{
    //
    public function show(content $content, $mainbox_id)
    {
        $data = $content->find($mainbox_id);
        return view('katalog.contentwork')->with([
            'mainbox_id' => $mainbox_id,
            'itemImg' => $data->itemImg,
            'itemText' => $data->itemText,
            'itemDesc' => $data->itemDesc,
            'itemSpec' => $data->itemSpec,
        ]);
    }
}
