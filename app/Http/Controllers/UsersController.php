<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user() {
        return view('user', ['name'=>'jesus']);
    }
}
