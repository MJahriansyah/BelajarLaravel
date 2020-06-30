<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    Public Function Register(){
        return view('register');
    }

    public function store(Request $request){
        $data = $request->all();
        return redirect('welcome')->with('data', $data);
    }

    Public Function Welcome(){
        return view('welcome', compact('name'));
    }
}
