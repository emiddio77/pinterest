<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            ['name' => 'pippo'],
            ['name' => 'pluto'],
            ['name' => 'minnie'],

        ];
        // dd($friends);
        foreach ($friends as $friend) {

            if ($name == $friend['name']) {
                // dd($friend);
                return view('details', ['friend' => $friend]);
            }
        };

    }

    public function contactUs()
    {
        return view('contattaci');
    }
    public function submit(Request $request){
        // dd($request);
        $name = $request->input('username');
        $mail = $request->input('mail');
        $usermessage = $request->input('message');

        Mail::to($mail)->send(new ContactMail($name, $mail, $usermessage));
        return redirect()->route('thank.you')->with('status', 'mail inviata');
    }
    public function thankYou()
    {
        return view('mail/thankyou');
    }
    public function inserisci(){
        return view('/card/insert');
    }
}
