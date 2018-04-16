<?php

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

Route::get('musicworld','songInTrack@getIndex');
Route::get('/musicworld/{nameGenre}','orderByGenre@getIndex');
Route::get('musicworld/ratingDanceEDM/nameSong',function(){
    return view('musicWorld.audio');
});