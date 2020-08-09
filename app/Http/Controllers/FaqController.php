<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Traits\VisitorTrait;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    use VisitorTrait;

    public function __construct()
    {

        $this->storeVisitor();
    }

    public function index()
    {
        $faqs1 = Faq::where('type_id', 1)->get();
        $faqs2 = Faq::where('type_id', 2)->get();
        $faqs3 = Faq::where('type_id', 3)->get();
        $faqs4 = Faq::where('type_id', 4)->get();
        return view('madaresona.faq.index', compact('faqs1', 'faqs2', 'faqs3', 'faqs4'));
    }
}
