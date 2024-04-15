<?php

use App\Http\Controllers\TributeController;
use App\Models\Tribute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TributeController::class, 'index']);
Route::post('/create', [TributeController::class, 'create']);

Route::get('/tributes', function () {
    $tributes = Tribute::latest()->paginate(15);
    return view('tribute', ['tributes' => $tributes]);
});

Route::get('/biography', function () {
    return view('biography');
});
