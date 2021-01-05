<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function checkAdmin(){
        if (Auth::guest()){
            redirect('/');
        } elseif (Auth::user(0)){
            redirect('/');
        }
    }
}
