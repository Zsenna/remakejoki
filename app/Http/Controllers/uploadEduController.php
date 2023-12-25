<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadModel;

class uploadEduController extends Controller
{
    public function upload_edu(Request $req)
    {
        // Validate the incoming request data
        $req->validate([
            'itemText' => 'required|string',
            'itemDesc' => 'required|string',
            'itemTo' => 'required|string',
            'itemImg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'headImg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filename = '';
        if ($req->hasFile('itemImg')) {
            $filename = $req->getSchemeAndHttpHost() . '/image2/' . time() . '.' . $req->itemImg->extension();
            $req->itemImg->move(public_path('/image2/'), $filename);
        }

        $filename1 = '';
        if ($req->hasFile('headImg')) {
            $filename1 = $req->getSchemeAndHttpHost() . '/headimage/' . time() . '.' . $req->headImg->extension();
            $req->headImg->move(public_path('/headimage/'), $filename1);
        }

        // Create a new uploadModel instance and set the table name
        $uploadModel_Edu = new uploadModel;
        $table = 'mainbox'; // Set the desired table name, 'mainbox' in this case
        $uploadModel_Edu->setTable($table);

        // Set the text and description
        $uploadModel_Edu->headImg = $filename1;
        $uploadModel_Edu->itemImg = $filename;
        $uploadModel_Edu->itemText = $req->input('itemText');
        $uploadModel_Edu->itemDesc = $req->input('itemDesc');
        $uploadModel_Edu->itemTo = $req->input('itemAbbrev');

        // $uploadModel_Edu->itemImg = $req->itemImg;
        // $uploadModel_Edu->itemText = $req->itemDesc;
        // $uploadModel_Edu->itemDesc = $req->itemDesc;
        // $uploadModel_Edu->itemTo = $req->itemDesc;

        // Save the data to the specified table
        $uploadModel_Edu->save();

        // Redirect to a success page or return a response
        return redirect('add2');
    }
}
