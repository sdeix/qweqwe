<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;
use App\Models\Image;
use App\Models\Comment;
class UserController extends Controller
{
    public function index(){
        $news =News::all();
        return view('welcome',['news'=>  $news]);
    }
    
    public function new(Request $request,$id){
        if($request->method()== 'POST'){
            Comment::create([
                'new_id'=>$request['new_id'],
                'text'=> $request['text']
            ]);
        }
        $news =News::where('id',$id)->first();
        $creator = User::where('id',$news->creator_id)->first();
        $img = Image::where('new_id',$news->id)->first();
        $comments = Comment::get()->where('new_id',$news->id);
        return view('new',['news'=>  $news,'creator'=>$creator,'img'=>$img,'comments'=>$comments]??'');
    }
}
