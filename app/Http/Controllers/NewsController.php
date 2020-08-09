<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsSearch($lang, $text){

        $news = News::where('active', 1)
            ->where('title_en', 'like', '%' . $text . '%')
            ->orWhere('title_ar', 'like', '%' . $text . '%')->get();
        return view('madaresona.news.newsGrid', compact('news'));
    }
}
