<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\School;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $schools = School::latest()->paginate(6);
        $specialSchools = School::where('special', 1)->get();
        return view('madaresona.main.index', compact('schools', 'specialSchools'));
    }

    public function getRegions($id)
    {
        $regions = Region::where('city_id', $id)->get();
        return $regions;
    }

    public function search(Request $request)
    {
        if ($request->search_select == 1) {
            //'name';
            $schools = School::where('name_en', 'like', '%' . $request->search_text . '%')->orWhere('name_ar', 'like', '%' . $request->search_text . '%')->get();
        } elseif ($request->search_select == 2) {
            // 'location';

        } elseif ($request->search_select == 3) {
            // 'school_type';

        } elseif ($request->search_select == 4) {
            // 'fees';
        }

        return view('madaresona.main.schoolsGrid', compact('schools'));

    }
}