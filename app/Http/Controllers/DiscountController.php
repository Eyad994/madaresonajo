<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Discount;
use App\Models\Region;
use App\Models\SchoolClass;
use App\Traits\VisitorTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiscountController extends Controller
{
    use VisitorTrait;

    public function __construct()
    {

        $this->storeVisitor();
    }

    public function index()
    {
        $schoolClasses = SchoolClass::all();
        $cities = City::all();
        return view('madaresona.discount.index', compact('schoolClasses', 'cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'school_name' => 'required',
            'avg' => 'required',
            'school_class' => 'required',
            'city_id' => 'required',
            'region_id' => 'required',
            'email_user' => 'required|email',
            'phone_number' => 'required|numeric',
        ]);

        Discount::create([
            'name' => $request->name,
            'current_school' => $request->school_name,
            'mark' => $request->avg,
            'class_id' => $request->school_class,
            'city_id' => $request->city_id,
            'region_id' => $request->region_id,
            'mobile' => $request->phone_number,
            'email' => $request->email_user,
        ]);

        return back()->with(['message' => app()->getLocale() == 'en' ? 'Discount submitted successfully' : 'تم تقديم الطلب بنجاح']);
    }

    public function getRegions($lang , $id)
    {
        $regions = Region::where('city_id', $id)->get();
        return $regions;
    }
}
