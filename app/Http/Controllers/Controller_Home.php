<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class Controller_Home extends Controller
{
    public static function index ()
    {
        return view('Home.index');
    }

    public static function Message (Request $request)
    {
        $validationMessage = $request->validate([
            'Name'          => ['required', 'Max:20'],
            'Email'         => ['required', 'email:dns'],
            'Mphone'        => ['required', 'max:16'],
            'Message'       => ['required']
        ]);

        Message::create($validationMessage);

        return redirect('/#contact')->with('success', 'Berhasil mengirim pesan .');
    }
}
