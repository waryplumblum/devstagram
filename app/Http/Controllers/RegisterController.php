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
            'name' => 'required | max:30',
            'username' => 'reuired | unique:users | min:3 | max:20',
            'email' => 'reuired | unique:users | email | max:60',
            'password' => 'required'
        ]);
    }
}
