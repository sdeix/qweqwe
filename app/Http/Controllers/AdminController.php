<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function makenew(Request $request){
        if(Auth::user()){
            if($request->method()=='POST'){
                $new = News::create([
                    'title'=>$request['title'],
                    'text'=>$request['text'],
                    'creator_id'=>Auth::user()->id
                ]);
                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('images'), $imageName);
                    Image::create([
                        'url'=>$imageName,
                        'new_id'=>$new['id']
                    ]);
                }
                return redirect('/');
            }
            return view('makenew');
        }
        return redirect('/');
    }
}
