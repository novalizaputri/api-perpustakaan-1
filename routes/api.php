<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostC;
use App\Http\Controllers\BookC;
use App\Http\Controllers\transaksiC;

route::get('/', function(){
    return 'Hello World API !';
});
route::get('/posts',[PostC::class,'index'])->middleware(['auth:sanctum']);
route::get('/posts/{id}',[PostC::class,'detail'])->middleware(['auth:sanctum']);

route::post('/login',[AuthC::class,'login']);

route::get('/admin',function(){
    return Hash::make('admin');
});

route::get('/books',[BookC::class,'index']);
route::get('/books/{id}',[BookC::class,'detail']);

route::get('/transaksi',[transaksiC::class,'index']);
route::get('/transaksi/{id}',[transaksiC::class,'detail']);

route::post('/login',[transaksiC::class,'login']);

route::get('/teller',function(){
    return Hash::make('teller');
});