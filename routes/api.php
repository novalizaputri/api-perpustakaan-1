<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaC;

Route:: get('/',function(){
    dd ('Hello World !');
});

route::get('/siswa',[SiswaC::class,'index']);
route::post('/siswa/store',[PerpustakaanController::class,'store']);
route::get('/siswa/show{id}',[PerpustakaanController::class,'show']);
route::post('/siswa/update/{id}', [PerpustakaanController::class ,'update']);
route::get('/siswa/destroy/{id}', [PerpustakaanController::class ,'destroy']);
