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
        'comment' => 'required|string',
    ]);

    // Prepare data to send to Google Sheet
    $postData = [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'comment' => $request->comment,
    ];

    // Google Apps Script Web App URL (your script URL)
    $googleSheetUrl = 'https://script.google.com/macros/s/AKfycbzhQKfOaZpJKgeeKdKEV8SSShsZkp22rGuYhOs_TPJj0SXc5VURPjjAVOW_od9s3xRg/exec';

    // Send data using Guzzle HTTP client
    try {
        $client = new \GuzzleHttp\Client();
        $response = $client->post($googleSheetUrl, [
            'form_params' => $postData,
        ]);

        return response()->json([
            'success' => true,  
            'message' => 'Message Sent and Saved to Google Sheet Successfully',
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to submit to Google Sheet',
            'error' => $e->getMessage()
        ], 500);
    }
}


}

