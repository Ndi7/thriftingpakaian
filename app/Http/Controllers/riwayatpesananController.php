<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riwayatpesananController extends Controller
{
    public function index()
    {
        return view('pembeli.riwayatpesanan');
    }
}
