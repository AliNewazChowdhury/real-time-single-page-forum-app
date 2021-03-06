<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use App\model\Question;
use App\model\Reply;
use App\Http\Resources\ReplyResource;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return ReplyResource::collection($question->replies);
        // return Reply::latest()->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Question $question,Request $request)
    {
        $reply = $question->replies()->create($request->all());

        return response(['reply'=>new ReplyResource($reply)],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question, Reply $reply)
    {
        return new ReplyResource($reply);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Question $question ,Request $request, Reply $reply)
    {
        $reply->update($request->all());
        return response('Update',Response::HTTP_ACCEPTED);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question,Reply $reply)
    {
        $reply->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
