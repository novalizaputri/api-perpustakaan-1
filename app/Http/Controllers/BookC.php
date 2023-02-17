<?php

namespace App\Http\Controllers;

use App\Models\BookM;
use Illuminate\Http\Request;
use App\Http\Resources\BookR;

class BookC extends Controller
{
    public function index(){
        $books = BookM::all();
        // return response()-> json($books);
        return BookR::collection($books);
    }

    public function detail($id){
        $books = BookM::findOrFail($id);
    return new BookR($books);
    }
}
