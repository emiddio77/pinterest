<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }
    public function aboutus()
    {
        $friends = [
            ['name' => 'pippo'],
            ['name' => 'pluto'],
            ['name' => 'minnie'],
        ];
        return view('aboutus', ['friends' => $friends]);
    }
    public function details($name)
    {
        // dd($name);
        $friends = [
            ['name'=>'pippo'],
            ['name'=>'pluto'],
            ['name'=>'minnie'],
        ];
        foreach ($friends as $friend) {
            if($name == $friend['name']);
            // dd($friend);
            return view('details', ['friend'=>'$friend']);
        }
    }
}
