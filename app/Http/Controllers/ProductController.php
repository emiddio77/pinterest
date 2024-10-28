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
        $img = $request->file('img')->store('public/img');
        // 'image' => $request->file('image')->store('public/images'),
        // $photo = new Photo();
        // $photo->name = $name;
        // $photo->description =  $description;
        // $photo->didascalia =  $didascalia;
// dd($request->all());
        // $photo->save();
        Photo::create([
            'name'=> $name,
            'description' => $description,
            'didascalia' => $didascalia,
            'img' => $img,

        ]);

        return redirect()->back()->with('message', 'articolo creato correttamente');

    }
    public function inserisci(){
        return view('card/insert');
    }
    public function foto(){
       $photos = Photo::all();

        return view('card/photos', ['photos'=>$photos]);
    }

}
