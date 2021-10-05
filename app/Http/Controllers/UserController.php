<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public static function getUsername(){
        if(Auth::check()){
            $username = Auth::user()->username;
        }
        return $username;
    }

    public static function getName(){
        if(Auth::check()){
            $name = Auth::user()->name;
        }
        return $name;
    }

    public static function getEmail(){
        if(Auth::check()){
            $email = Auth::user()->email;
        }
        return $email;
    }
}
