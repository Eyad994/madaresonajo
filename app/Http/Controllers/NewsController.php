<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\School;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsSearch($lang, $text){

        if ($text == 'null')
        {
            $newsArray = News::where('active', 1)->get();
        } else {
            $newsArray = News::where('active', 1)
                ->where('title_en', 'like', '%' . $text . '%')
                ->orWhere('title_ar', 'like', '%' . $text . '%')->get();
        }

        $news = array();
        foreach ($newsArray as $key => $index) {
            $data['id'] = $index['id'];
            $data['user_id'] = $index['user_id'];
            $data['user_type'] = $index['user_type'];
            $data['news_type'] = $index['news_type'];
            $data['title_ar'] = $index['title_ar'];
            $data['title_en'] = $index['title_en'];
            $data['school_name'] = School::where('user_id', $index['user_id'])->value('name_en');
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
                array_push($news, $data);
            }

        }
        return view('madaresona.news.newsGrid', compact('news'));
    }
}
