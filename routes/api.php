<?php

use App\Models\Today;
use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UpcomingResource;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Get all the upcoming task
Route::get("/upcoming",function()
{
    $upcoming = Upcoming::all();
    return UpcomingResource::collection($upcoming);
});
// Add a new task
Route::post("/upcoming",function(Request $request)
{
    
    return Upcoming::create([
        'title'=>$request->title,
        'taskId'=>$request->taskId,
        'waiting'=>$request->waiting
    ]);
});
// Delete upcoming task

Route::delete('/upcoming/{taskId}',function($taskId){
    DB::table('upcomings')->where('taskId',$taskId)->delete();
    return 204;
});
// Today task
Route::post('/dailytask',function (Request $request)
{
    return Today::create([
        'id' =>$request->id,
        'title' =>$request->title,
        'taskId' =>$request->taskId,
    ]);
});
// Delete today task
Route::delete('/dailytask/{taskId}',function ($taskId)
{
    DB::table('todys')->where('taskId',$taskId)->delete();
    return 204;
});