<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\News;
use App\Models\School;
use App\Models\SchoolType;
use App\Models\Supplier;
use App\Models\SupplierType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        $suppliersType = SupplierType::all();
        return view('madaresona.supplier.index', compact('suppliers','suppliersType'));

    }

    public function show($lang , $id, $slug)
    {

        $supplier = Supplier::where('id',$id)->first();
        return view('madaresona.supplier.show', compact('supplier'));
    }
}
