<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function show($slug)
    {
        $cleanSlug = str_replace('-', ' ', $slug);

        // preg_replace('/[-]+/', ' ', trim($cleanSlug))

        $school = School::where('name_ar', 'like', "%$cleanSlug%")->first();

        return view('madaresona.main.show', compact('school'));
    }
}
