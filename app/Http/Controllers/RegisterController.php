<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
        // dd('Post...');
        // dd($request->get('username'));

        // Validación
        $this->validate($request,[
            'name' => 'required|max:30',
        ]);
    }
}
