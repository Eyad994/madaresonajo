<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\News;
use App\Models\School;
use App\Models\SchoolType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $schools = School::where('active', 1)->orderBy('school_order')->paginate(6);
        $specialSchools = School::where('active', 1)->where('special', 1)->get();
        $newsArray = News::where('news_type', 2)->where('active', 1)->orderBy('order')->get();
        $schoolsAdvertisements = Advertisement::where('type', 1)->where('active', 1)->orderBy('order')->get();
        $suppliersAdvertisements = Advertisement::where('type', 2)->where('active', 1)->orderBy('order')->get();

        $mainNews = array();
        foreach ($newsArray as $key => $index) {
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


            if ($data['created_at'] > Carbon::now()) {
                array_push($mainNews, $data);
            }

        }

        $schoolsType = SchoolType::all();
        return view('madaresona.supplier.index', compact('schools', 'specialSchools',
            'mainNews', 'schoolsType'
            , 'schoolsAdvertisements', 'suppliersAdvertisements'));

    }
}
