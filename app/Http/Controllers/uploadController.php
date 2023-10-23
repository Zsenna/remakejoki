<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadModel;

class uploadController extends Controller
{
    //
    function upload(Request $req)
    {
        $filename = '';
        if ($req->hasFile('itemImg')) {
            $filename = $req->getSchemeAndHttpHost() . '/image/' . time() . '.' . $req->itemImg->extension();
            $req->itemImg->move(public_path('/image/'), $filename);
        }

        $uploadModel = new uploadModel;
        $uploadModel->itemImg = $filename;
        $uploadModel->itemText = $req->itemText;
        $uploadModel->itemDesc = $req->itemDesc;
        $uploadModel->save();
        return redirect('add');
    }
}
