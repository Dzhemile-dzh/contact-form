<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Validator;
use App\Mail\InquiryNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'phone' => 'required',
            'message' => 'required|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $inquiry = Inquiry::create($request->only(['name', 'email', 'phone', 'message']));

        Mail::to('support@a4n8.com')->send(new InquiryNotification($inquiry));

        return response()->json(['message' => 'Inquiry submitted successfully'], 200);
    }
}
