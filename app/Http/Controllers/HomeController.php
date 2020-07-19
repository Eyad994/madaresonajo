<?php

namespace App\Http\Controllers;

use App\Models\Premium;
use App\Models\Region;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index($locale = 'en')
    {
        App::setLocale($locale);
        /*$test = School::where('id', 11)->first();
        $result = preg_replace('/[ ]+/', '-', trim($test->name_ar));
        return $result;*/

        $schools = School::latest()->paginate(6);
        $specialSchools = School::where('special', 1)->get();
        return view('madaresona.main.index', compact('schools', 'specialSchools'));
    }

    public function refreshCarousel()
    {
        $specialSchools = School::where('special', 1)->get();
        return view('madaresona.main.mainCarousel', compact('specialSchools'));
    }

    public function getRegions($lang , $id)
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

            if (isset($request->$request->region_id) && isset($request->city_id) && isset($request->search_text)) {
                $schools = School::where('name_en', 'like', '%' . $request->search_text . '%')
                    ->orWhere('name_ar', 'like', '%' . $request->search_text . '%')
                    ->where('region_id', $request->region_id)
                    ->where('city_id', $request->city_id)
                    ->get();
            } else {
                $schools = School::where('id', 0)->get();
            }

        } elseif ($request->search_select == 3) {
            if (isset($request->search_text) && isset($request->school_type)) {
                if ($request->school_type == 0) {
                    $schools = School::where('name_en', 'like', '%' . $request->search_text . '%')
                        ->orWhere('name_ar', 'like', '%' . $request->search_text . '%')
                        ->where('curriculum_ls_local', 1)
                        ->get();
                } else {
                    $schools = School::where('name_en', 'like', '%' . $request->search_text . '%')
                        ->orWhere('name_ar', 'like', '%' . $request->search_text . '%')
                        ->where('curriculum_ls_public', 1)
                        ->get();
                }
            } else {
                $schools = School::where('id', 0)->get();
            }

        } elseif ($request->search_select == 4) {
            if (isset($request->school_class))
            {
                $premiums = Premium::where('price', '>=', $request->from_price)
                    ->orWhere('price', '<=', $request->to_price)
                    ->where('class_id', $request->school_class)
                    ->get('school_id')
                ->toArray();


                $schools = School::whereIn('id', $premiums)->get();
            } else {
                $schools = School::where('id', 0)->get();
            }
        }

        return view('madaresona.main.schoolsGrid', compact('schools'));

    }
}