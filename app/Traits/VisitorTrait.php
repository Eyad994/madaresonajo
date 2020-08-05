<?php

namespace App\Traits;
use App\Models\Visitor;

trait VisitorTrait {

    public function storeVisitor()
    {
        $visitor = Visitor::where('ip', request()->ip())->first();

        if (is_null($visitor))
        {
            Visitor::create([
                'ip' => request()->ip()
            ]);
        }

        $visitorCount = Visitor::all()->count();

        return $visitorCount;
    }
}