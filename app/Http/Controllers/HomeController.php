<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Premium;
use App\Models\Region;
use App\Models\School;
use App\Models\SchoolType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index($locale = 'ar')
    {
        App::setLocale($locale);
        /*$test = School::where('id', 11)->first();
        $result = preg_replace('/[ ]+/', '-', trim($test->name_ar));
        return $result;*/

        $schools = School::where('active', 1)->latest()->paginate(6);
        $specialSchools = School::where('active', 1)->where('special', 1)->get();
        $newsArray = News::where('news_type', 2)->where('active', 1)->latest()->get();

        $mainNews = array();
        foreach ($newsArray as $key => $index)
        {
            $data['id'] = $index['id'];
            $data['user_id'] = $index['user_id'];
            $data['user_type'] = $index['user_type'];
            $data['news_type'] = $index['news_type'];
            $data['title_ar'] = $index['title_ar'];
            $data['title_en'] = $index['title_en'];
            $data['text_ar'] = $index['text_ar'];
            $data['text_en'] = $index['text_en'];
            $data['img'] = $index['img'];
            $data['active'] = $index['active'];
            $data['active_days'] = $index['active_days'];
            $data['order'] = $index['order'];
            $data['youtube'] = $index['youtube'];
            $data['created_at'] = $index['created_at']->addDays($data['active_days']);
            $data['updated_at'] = $index['updated_at'];


            if ($data['created_at'] > Carbon::now())
            {
                array_push($mainNews, $data);
            }

        }

        $schoolsType = SchoolType::all();
        return view('madaresona.main.index', compact('schools', 'specialSchools', 'mainNews', 'schoolsType'));
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
            $schools = School::where('active', 1)->where('name_en', 'like', '%' . $request->search_text . '%')->orWhere('name_ar', 'like', '%' . $request->search_text . '%')->get();
        } elseif ($request->search_select == 2) {

            if (isset($request->region_id) && isset($request->city_id)) {
                $schools = School::where('active', 1)->where('region_id', $request->region_id)
                    ->where('city_id', $request->city_id)
                    ->get();
            } elseif (isset($request->city_id) && !isset($request->region_id)) {
                $schools = School::where('active', 1)->where('region_id', $request->region_id)
                    ->orWhere('city_id', $request->city_id)
                    ->get();
            }
            else {
                $schools = School::where('id', 0)->get();
            }

        } elseif ($request->search_select == 3) {
            if (isset($request->search_text) && isset($request->school_type)) {
                if ($request->school_type == 0) {
                    $schools = School::where('active', 1)->where('name_en', 'like', '%' . $request->search_text . '%')
                        ->orWhere('name_ar', 'like', '%' . $request->search_text . '%')
                        ->where('curriculum_ls_local', 1)
                        ->get();
                } else {
                    $schools = School::where('active', 1)->where('name_en', 'like', '%' . $request->search_text . '%')
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


                $schools = School::where('active', 1)->whereIn('id', $premiums)->get();
            } else {
                $schools = School::where('id', 0)->get();
            }
        }

        return view('madaresona.main.schoolsGrid', compact('schools'));

    }

    public function educationalInstitutions($lang, $id)
    {
        if ($id == 0)
        {
            $schools = School::where('active', 1)->get();
        } else {
            $schools = School::where('active', 1)->where('type', $id)->get();
        }
        return view('madaresona.main.schoolsGrid', compact('schools'));
    }
}