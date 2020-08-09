<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use App\Traits\VisitorTrait;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    use VisitorTrait;

    public function __construct()
    {

        $this->storeVisitor();
    }

    public function index()
    {
        return view('madaresona.pricing.index');
    }

    public function contactUs()
    {
        return view('madaresona.pricing.contactUs');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email_user' => 'required|email',
            'phone_number' => 'required|numeric',
            'message'  => 'required'
        ]);

        Suggestion::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email_user,
            'text' => $request->message,
        ]);

        return back()->with(['message' => app()->getLocale() == 'en' ? 'Discount submitted successfully' : 'تم تقديم الطلب بنجاح']);
    }
}
