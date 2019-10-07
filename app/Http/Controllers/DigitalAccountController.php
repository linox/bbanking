<?php

namespace AppBank\Http\Controllers;

use Illuminate\Http\Request;

class DigitalAccountController extends Controller
{
    public function extract()
    {
        return view('back-end.digital-account.extract');
    }

    public function payment()
    {
        return view('back-end.digital-account.payment');
    }

    public function transfer()
    {
        return view('back-end.digital-account.transfer');
    }

    public function deposit()
    {
        return view('back-end.digital-account.deposit');
    }

    public function mobile_recharge()
    {
        return view('back-end.digital-account.mobile-recharge');
    }
}
