<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\News;
use App\Models\School;
use App\Models\SchoolType;
use App\Models\Supplier;
use App\Models\SupplierMessage;
use App\Models\SupplierType;
use App\Traits\VisitorTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    use VisitorTrait;

    public function __construct()
    {

        $this->storeVisitor();
    }

    public function index()
    {
        $suppliers = Supplier::all();
        $suppliersType = SupplierType::all();
        return view('madaresona.supplier.index', compact('suppliers','suppliersType'));

    }

    public function show($lang , $id, $slug)
    {
        $supplier = Supplier::where('id',$id)->first();
        $supplierTypes = explode(',', $supplier->supplier_type);
        $supplierServices = SupplierType::whereIn('id', $supplierTypes)->get();
        $relatedSuppliers = Supplier::whereIn('supplier_type', $supplierTypes)->take(5)->get();

        return view('madaresona.supplier.show', compact('supplier', 'supplierServices', 'relatedSuppliers'));
    }

    public function search($lang, $text)
    {
        $suppliers = Supplier::where('active', 1)
            ->where('name_ar', 'like', '%' . $text . '%')
            ->orWhere('name_en', 'like', '%' . $text . '%')->get();
        return view('madaresona.supplier.supplierGrid', compact('suppliers'));
    }

    public function supplierType($lang, $id)
    {
        if ($id == 0)
        {
            $suppliers = Supplier::all();
        } else {
            $suppliers = Supplier::where('active', 1)->where('supplier_type', $id)->get();
        }
        return view('madaresona.supplier.supplierGrid', compact('suppliers'));
    }

    public function store(Request $request)
    {
        SupplierMessage::create($request->except('_token'));
        return back()->with(['success' => 'تم الارسال بنجاح']);
    }
}
