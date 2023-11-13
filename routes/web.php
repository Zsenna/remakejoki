<?php

use App\Http\Controllers\ourProductcontroller;
use App\Http\Controllers\productController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\uploadEduController;
use App\Http\Controllers\robotController;
use App\Http\Controllers\agvController;
use App\Http\Controllers\contentworkController;
use App\Http\Controllers\contenthighController;
use App\Http\Controllers\plcController;
use App\Http\Controllers\nplcController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/trackrecord', function () {
    return view('trackrecord');
});

Route::get('/highlight', function () {
    return view('highlight');
});

Route::get('/compro', function () {
    return view('compro');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/center', function () {
    return view('/katalog/trainingcenter');
});

Route::get('/onsite', function () {
    return view('/katalog/trainingonsite');
});

Route::get('/online', function () {
    return view('/katalog/trainingonline');
});

Route::get('/competition', function () {
    return view('competition');
});

Route::get('/worksem', function () {
    return view('workshop');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/deskripsi', function () {
    return view('katalog/cart');
});

Route::get('/katalog/robot', function () {
    return view('katalog/robot');
});

Route::get('/katalog/agv', function () {
    return view('katalog/agv');
});

Route::get('/katalog/plc', function () {
    return view('katalog/plc');
});

Route::get('/katalog/nplc', function () {
    return view('katalog/nplc');
});

Route::get('/artikel', function () {
    return view('artikel');
});

// Route::get('/pic2', function () {
//     return view('katalog/pic2');
// });

// Route::get('/pic3', function () {
//     return view('katalog/pic3');
// });

// Route::get('/pic4', function () {
//     return view('katalog/pic4');
// });
// Route::get('/si', function () {
//     return view('si');
// });



Route::view('add', 'upload');
Route::post('add', [uploadController::class, 'upload']);

Route::view('add2', 'upload-edu');
Route::post('add2', [uploadEduController::class, 'upload_edu']);

Route::resource('Product-robot', robotController::class);
Route::resource('Product-agv', agvController::class);
Route::resource('Product-plc', plcController::class);
Route::resource('Product-nplc', nplcController::class);
Route::resource('contentwork', contentworkController::class);
Route::resource('contenthigh', contenthighController::class);

Route::get('product', [productController::class, 'show']);
Route::get('robot', [ourProductcontroller::class, 'showrobot']);
Route::get('agv', [ourProductcontroller::class, 'showagv']);
Route::get('plc', [ourProductcontroller::class, 'showplc']);
Route::get('nplc', [ourProductcontroller::class, 'shownplc']);
Route::get('home', [mainController::class, 'showmain']);
Route::get('training', [mainController::class, 'showtraining']);
Route::get('center', [mainController::class, 'showtrainingc']);
Route::get('onsite', [mainController::class, 'showtrainingos']);
Route::get('online', [mainController::class, 'showtrainingol']);
Route::get('compro', [mainController::class, 'showcompro']);
Route::get('highlight', [mainController::class, 'showhighlight']);
