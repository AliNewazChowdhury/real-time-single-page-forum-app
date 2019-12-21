<?php

Route::apiResource('/question','QuestionController');


Route::apiResource('/category','CategoryController');

Route::apiResource('/question/{question}/reply','ReplyController');


Route::post('/like/{reply}','LikeController@likeIt');
Route::delete('/like/{reply}','LikeController@unlikeIt');

Route::group([
    // 'middleware'=> 'JWT',
    'prefix'=>'auth'
],function(){
    Route::post('login','AuthController@login');
    Route::post('register','AuthController@register');
    Route::post('logout','AuthController@logout');
    Route::post('refresh','AuthController@refresh');
    Route::post('me','AuthController@me');
});