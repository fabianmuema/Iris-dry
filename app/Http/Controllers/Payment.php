<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Payment extends Controller
{
    public function index() {
        $payment= \App\Models\Payment::find(1);

        $name = $payment->clientName;

        $amount = $payment->amount;
        $payment->amount= 2000;
        $payment->save();
        $amount = $payment->amount;

        return view('client', ['n' => $name, 'p' => $amount]);
    }
}
