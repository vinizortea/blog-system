<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dadosDashboard(){
        $username = Auth::user()->username;
        $name = Auth::user()->name;
        $email = Auth::user()->email;

        return view('dashboard',compact('username','name','email'));
    }

    public function dadosConta(){
        $username = Auth::user()->username;
        $name = Auth::user()->name;
        $email = Auth::user()->email;

        return view('conta',compact('username','name','email'));
    }
    
    public function dadosPostagens(){
        $username = Auth::user()->username;
        $name = Auth::user()->name;
        $email = Auth::user()->email;

        return view('postagens',compact('username','name','email'));
    }

    public function dadosNovaPostagem(){
        $username = Auth::user()->username;
        $name = Auth::user()->name;
        $email = Auth::user()->email;

        return view('novaPostagem',compact('username','name','email'));
    }
}
