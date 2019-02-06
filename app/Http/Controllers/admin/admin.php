<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function pagination() {
    $user = User::all();

    return view('admins.admin', compact('users'));
    }

    public function create() {

    }

}
