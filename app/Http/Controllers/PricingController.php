<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        return view('madaresona.pricing.index');
    }

    public function contactUs()
    {
        return view('madaresona.pricing.contactUs');
    }
}
