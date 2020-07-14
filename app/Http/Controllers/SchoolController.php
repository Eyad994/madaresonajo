<?php

namespace App\Http\Controllers;

use App\Models\GallarySchool;
use App\Models\News;
use App\Models\Premium;
use App\Models\School;
use App\Models\Transportation;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function show($lang ,$slug)
    {
        $cleanSlug = str_replace('-', ' ', $slug);

        // preg_replace('/[-]+/', ' ', trim($cleanSlug))

        $school = School::where('name_ar', 'like', "%$cleanSlug%")->first();
        $gallery = GallarySchool::where('school_id', $school->id)->get();
        $news = News::where('user_id', $school->user_id)->get();
        $transportations = Transportation::where('school_id', $school->id)->get();
        $premiums = Premium::where('school_id', $school->id)->get();

        return view('madaresona.main.show', compact('school', 'gallery', 'news', 'transportations', 'premiums'));
    }

    public function showWithoutModal($lang ,$slug)
    {
        $cleanSlug = str_replace('-', ' ', $slug);

        // preg_replace('/[-]+/', ' ', trim($cleanSlug))

        $school = School::where('name_ar', 'like', "%$cleanSlug%")->first();
        $gallery = GallarySchool::where('school_id', $school->id)->get();
        $news = News::where('user_id', $school->user_id)->get();
        $transportations = Transportation::where('school_id', $school->id)->get();
        $premiums = Premium::where('school_id', $school->id)->get();

        return view('madaresona.main.showWithoutModal', compact('school', 'gallery', 'news', 'transportations', 'premiums'));
    }
}
