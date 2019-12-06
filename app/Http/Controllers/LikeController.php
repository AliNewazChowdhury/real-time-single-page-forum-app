<?php

namespace App\Http\Controllers;
use App\model\Reply;
use App\model\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likeIt(Reply $reply){
        $reply->like()->create([
           'user_id'=> auth()->id()
        ]);
    }
    public function unlikeIt(Reply $reply){
        $reply->like()->where('user_id',auth()->id())->first()->delete();
    } 
}
