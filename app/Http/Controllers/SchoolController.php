<?php

namespace App\Http\Controllers;

use App\Models\GallarySchool;
use App\Models\News;
use App\Models\Premium;
use App\Models\Requests;
use App\Models\School;
use App\Models\Suggestion;
use App\Models\Transportation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    public function services()
    {
        return view('madaresona.main.services');
    }

    public function faSubscribing()
    {
        return view('madaresona.main.faSubscribing');
    }


    public function show($lang, $slug)
    {

        //$cleanSlug = str_replace('-', ' ', $slug);

        // preg_replace('/[-]+/', ' ', trim($cleanSlug))

        //$school = School::where('name_ar', 'like', "%$cleanSlug%")->orWhere('name_en', 'like', "%$cleanSlug%")->first();
        $school = School::where('id', $slug)->first();
        $genderSchool = explode(',', $school->gender);

        $gallery = GallarySchool::where('school_id', $school->id)->get();
        $newsArray = News::where('active', 1)->where('user_id', $school->user_id)->latest()->get();

        $news = array();
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
                array_push($news, $data);
            }

        }

        $transportations = Transportation::where('school_id', $school->id)->get();
        $premiums = Premium::where('school_id', $school->id)->get();

        return view('madaresona.main.show', compact('school', 'gallery', 'news', 'transportations', 'premiums', 'genderSchool'));
    }

    public function showWithoutModal($lang, $slug)
    {
        $cleanSlug = str_replace('-', ' ', $slug);

        // preg_replace('/[-]+/', ' ', trim($cleanSlug))

        $school = School::where('name_ar', 'like', "%$cleanSlug%")->orWhere('name_en', 'like', "%$cleanSlug%")->first();
        $genderSchool = explode(',', $school->gender);
        $gallery = GallarySchool::where('school_id', $school->id)->get();
        $news = News::where('user_id', $school->user_id)->get();
        $transportations = Transportation::where('school_id', $school->id)->get();
        $premiums = Premium::where('school_id', $school->id)->get();


        return view('madaresona.main.showWithoutModal', compact('school', 'gallery', 'news', 'transportations', 'premiums', 'genderSchool'));
    }
    public function showWithoutModalOut($id, $slug,$locale = 'ar')
    {

        App::setLocale($locale);
        $cleanSlug = str_replace('-', ' ', $slug);

        // preg_replace('/[-]+/', ' ', trim($cleanSlug))

        $school = School::where('name_ar', 'like', "%$cleanSlug%")->orWhere('name_en', 'like', "%$cleanSlug%")->first();
        $genderSchool = explode(',', $school->gender);
        $gallery = GallarySchool::where('school_id', $school->id)->get();
        $news = News::where('user_id', $school->user_id)->get();
        $transportations = Transportation::where('school_id', $school->id)->get();
        $premiums = Premium::where('school_id', $school->id)->get();


        return view('madaresona.main.showWithoutModal', compact('school', 'gallery', 'news', 'transportations', 'premiums', 'genderSchool'));
    }

    public function showMore($lang, $id, $title)
    {
        $news = News::where('id', $id)->first();

        if ($news->news_type == 1) {
            $relatedNews = News::where('id', '!=', $id)->with('school:id,user_id,name_en')->where('user_id', $news->user_id)->orderBy('order')->take(3)->get();
        } else {
            $relatedNews = News::where('id', '!=', $id)->with('school:id,user_id,name_en')->where('news_type', 1)->orderBy('order')->take(3)->get();
        }

        $schoolName = School::where('user_id', $news->user_id)->value('name_en');

        return view('madaresona.main.showMore', compact('news', 'schoolName', 'relatedNews'));
    }

    public function news()
    {
        $newsArray = News::where('active', 1)->orderBy('order')->get();

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

        return view('madaresona.news.index', compact('news'));
    }

    public function newSubscription()
    {
        return view('madaresona.subscription.index');
    }

    public function storeNewSubscription(Request $request)
    {
        $request->validate([
            'school_name' => 'required',
            'contact_name' => 'required',
            'email_user' => 'required|email',
            'phone_number' => 'required|numeric',
            'message' => 'required',
        ]);

        Requests::create([
            'name' => $request->school_name,
            'contact_name' => $request->contact_name,
            'email' => $request->email_user,
            'phone' => $request->phone_number,
            'text' => $request->message,
            'type' => 2
        ]);

        return back()->with(['success' => 'تم ارسال الطلب بنجاح']);
    }

    public function newSuggestion()
    {
        return view('madaresona.help.suggestion');
    }

    public function storeNewSuggestion(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email_user' => 'required',
            'message' => 'required',
        ]);

        Suggestion::create([
            'name' => $request->name,
            'email' => $request->email_user,
            'text' => $request->message,
        ]);

        return back()->with(['success' => 'تم ارسال الاقتراح بنجاح']);
    }
}
