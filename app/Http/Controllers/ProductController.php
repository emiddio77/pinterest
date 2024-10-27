<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        // dd($request->all());

        $name= $request->name;
        $description= $request->description;
        $didascalia= $request->didascalia;

        $photo = new Photo();
        $photo->name = $name;
        $photo->description =  $description;
        $photo->didascalia =  $didascalia;

        $photo->save();
        return redirect()->back();

    }
    public function inserisci(){
        return view('card/insert');
    }
    public function foto(){
       $photos = Photo::all();

        return view('card/photos', ['photos'=>$photos]);
    }

}
