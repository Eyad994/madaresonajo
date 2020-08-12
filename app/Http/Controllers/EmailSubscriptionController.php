<?php

namespace App\Http\Controllers;

use App\Models\SubscribesEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailSubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $validations = Validator::make($request->all(), [
           'email' => 'required|unique:subscribes_emails|email'
        ]);

        if ($validations->fails())
        {
            return response()->json(['errors' => $validations->errors(), 'status' => 422]);
        }

       $subscribeEmail = SubscribesEmail::create([
           'email' => $request->email
        ]);

        if ($subscribeEmail)
        {
            return response()->json(['message' => 'تم الاشتراك بنجاح']);
            //return route('home');
            //return view(route('home', app()->getLocale()))->with(['success' => 'تم الاشتراك بنجاح']);
        }
    }
}
