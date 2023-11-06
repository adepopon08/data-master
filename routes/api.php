<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('provinsi', function (Request $request) {
    $data = DB::table('tb_provinsi')
        ->where('provinsi', 'like', '%' . $request->term . '%')
        ->get();
    return response()->json($data);
});

Route::get('kabupaten/{id_provinsi}', function (Request $request, $id_provinsi) {
    $data = DB::table('tb_kabupaten')
        ->where('id_provinsi', $id_provinsi)
        ->where('kabupaten', 'like', '%' . $request->term . '%')
        ->get();
    return response()->json($data);
});

Route::get('kecamatan/{id_kabupaten}', function (Request $request, $id_kabupaten) {
    $data = DB::table('tb_kecamatan')
        ->where('id_kabupaten', $id_kabupaten)
        ->where('kecamatan', 'like', '%' . $request->term . '%')
        ->get();
    return response()->json($data);
});

Route::get('kelurahan/{id_kecamatan}', function (Request $request, $id_kecamatan) {
    $data = DB::table('tb_kelurahan')
        ->where('id_kecamatan', $id_kecamatan)
        ->where('kelurahan', 'like', '%' . $request->term . '%')
        ->get();
    return response()->json($data);
});
