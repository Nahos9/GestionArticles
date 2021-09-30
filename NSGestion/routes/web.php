<?php

use App\Models\Article;
use App\Models\Role;
use App\Models\TypeArticle;
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

Route::get('',function(){
    return view('home');
});

Route::get('/roles',function(){

    return Role::with("users")->get();
});

Route::get('/typesArticles',function(){

    return TypeArticle::with('articles')->get();
});

    

