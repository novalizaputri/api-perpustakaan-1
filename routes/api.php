<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostC;

route::get('/', function(){
    return 'Hello World API !';
});
route::get('/posts',[PostC::class,'index']);
route::get('/posts/{id}',[PostC::class,'detail']);
