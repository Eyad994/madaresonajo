<?php

namespace App\Http\Controllers;

use App\Models\GallarySchool;
use App\Models\News;
use App\Models\Premium;
use App\Models\School;
use App\Models\Transportation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function show($lang ,$slug)
    {

        $cleanSlug = str_replace('-', ' ', $slug);

        // preg_replace('/[-]+/', ' ', trim($cleanSlug))

        $school = School::where('name_ar', 'like', "%$cleanSlug%")->orWhere('name_en', 'like', "%$cleanSlug%")->first();

        $gallery = GallarySchool::where('school_id', $school->id)->get();
        $newsArray = News::where('user_id', $school->user_id)->latest()->get();

        $news = array();
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
                array_push($news, $data);
            }

        }

        $transportations = Transportation::where('school_id', $school->id)->get();
        $premiums = Premium::where('school_id', $school->id)->get();

        return view('madaresona.main.show', compact('school', 'gallery', 'news', 'transportations', 'premiums'));
    }

    public function showWithoutModal($lang ,$slug)
    {
        $cleanSlug = str_replace('-', ' ', $slug);

        // preg_replace('/[-]+/', ' ', trim($cleanSlug))

        $school = School::where('name_ar', 'like', "%$cleanSlug%")->orWhere('name_en', 'like', "%$cleanSlug%")->first();
        $gallery = GallarySchool::where('school_id', $school->id)->get();
        $news = News::where('user_id', $school->user_id)->get();
        $transportations = Transportation::where('school_id', $school->id)->get();
        $premiums = Premium::where('school_id', $school->id)->get();

        return view('madaresona.main.showWithoutModal', compact('school', 'gallery', 'news', 'transportations', 'premiums'));
    }

    public function showMore($lang, $id)
    {
        $news = News::where('id', $id)->first();

        $schoolName = School::where('user_id', $news->user_id)->value('name_en');

        return view('madaresona.main.showMore', compact('news', 'schoolName'));
    }

}
