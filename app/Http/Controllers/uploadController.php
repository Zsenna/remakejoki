<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadModel;


class uploadController extends Controller
{
    public function upload(Request $req)
    {
        //Validate the incoming request data
        $req->validate([
            'itemText' => 'required|string',
            'itemDesc' => 'required|string',
            'itemSpec' => 'required|string',
            'itemTo' => 'required|string',
            'itemImg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // You can adjust the validation rules as needed.
        ]);

        $filename = '';
        if ($req->hasFile('itemImg')) {
            $filename = $req->getSchemeAndHttpHost() . '/image/' . time() . '.' . $req->itemImg->extension();
            $req->itemImg->move(public_path('/image/'), $filename);
        }

        // Create a new uploadModel instance and set the table name
        $uploadModel = new uploadModel;
        $table = 'product'; // Set the desired table name, 'mainbox' in this case
        $uploadModel->setTable($table);

        $uploadModel->itemImg = $filename;
        $uploadModel->itemSpec = $req->itemSpec;
        $uploadModel->itemText = $req->itemText;
        $uploadModel->itemDesc = $req->itemDesc;
        $uploadModel->itemTo = $req->input('itemAbbrev');

        $uploadModel->save();

        return redirect('add');
    }
}
