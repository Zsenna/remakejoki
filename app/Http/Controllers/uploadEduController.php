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
        ]);

        // Create a new uploadModel instance and set the table name
        $uploadModel_Edu = new uploadModel;
        $table = 'mainbox'; // Set the desired table name, 'mainbox' in this case
        $uploadModel_Edu->setTable($table);

        // Set the text and description
        $uploadModel_Edu->itemText = $req->input('itemText');
        $uploadModel_Edu->itemDesc = $req->input('itemDesc');
        $uploadModel_Edu->itemTo = $req->input('itemAbbrev');

        // Save the data to the specified table
        $uploadModel_Edu->save();

        // Redirect to a success page or return a response
        return redirect('add2');
    }
}
