<?php

namespace App\Http\Controllers;

use App\Models\transaksiM;
use Illuminate\Http\Request;
use App\Http\Resources\transaksiR;

class transaksiC extends Controller
{
    public function index(){
        $transaksi = transaksiM::all();
        // return response()-> json($transaksi);
        return transaksiR::collection($transaksi);
    }

    public function detail($id){
        $transaksi = transaksiM::findOrFail($id);
    return new transaksiR($transaksi);
    }
}
