<?php

namespace AppBank\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function access()
    {
        return view('back-end.user.access');
    }

    public function profile()
    {
        return view('back-end.user.profile');
    }

    public function indicateds()
    {
        return view('back-end.user.indicateds');
    }

    public function indicated_store(Request $request)
    {
        dd($request->all());
    }
}
