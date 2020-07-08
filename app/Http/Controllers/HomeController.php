<?php

namespace App\Http\Controllers;

use App\Models\School;

class HomeController extends Controller
{
    public function index()
    {
        $schools = School::latest()->paginate(6);
        $specialSchools = School::where('special', 1)->get();
        return view('madaresona.main.index', compact('schools', 'specialSchools'));
    }
}