<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('index');});


Route::get('/travel',function(){
    return(view("pages.travel"));
});

Route::get('/destination',function(){
    return(view("pages.distination"));
});


?>
