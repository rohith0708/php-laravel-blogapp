<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    public function index(){
        $post = post::all();

        return view('home.index',compact('post'));
    }
    public function post(Request $request){
        $data = new post;
        $data->username=Auth::user()->name;

        // imagepart

        $image=$request->image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('post',$imagename);

        $data->image=$imagename;
        }

        $data->description=$request->description;
        $data->save();

        return redirect()->back();

    }    
    
}

