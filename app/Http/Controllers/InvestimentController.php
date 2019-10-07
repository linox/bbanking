<?php

namespace AppBank\Http\Controllers;

use Illuminate\Http\Request;

class InvestimentController extends Controller
{
    public function index()
    {
        return view('back-end.investiment.index');
    }

    public function create()
    {
        return view('back-end.investiment.create');
    }

    public function store_investiment(Request $request)
    {
        dd($request->all());
    }
}
