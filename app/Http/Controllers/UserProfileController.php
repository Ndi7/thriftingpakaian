<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function edit($id)
    {
        return view('userprofil_edit');
    }
}