<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|digits_between:8,15',
            'message' => 'required|string',
        ]);

        
        return response()->json([
            'success' => true,
            'message' => 'Message Sent Successfully'
        ]);
    }
}

