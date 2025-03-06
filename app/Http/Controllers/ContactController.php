<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\EnquiryNotification;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submitEnquiry(Request $request)
    {


        // Validate form data
        $validated = $request->validate([
            'type' => 'required|string|in:service,product,parts',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
            'products' => 'required_if:type,product|array',
            'parts' => 'required_if:type,parts|array',
            'service' => 'required_if:type,service|string|in:general,repair,maintenance'
        ]);

        try {
            // Send email to admin
            $adminEmails = [
                'nithish.n6@gmail.com',
                'goodrichpestcontrol@gmail.com'
            ];

            // Send email using the new template
            Mail::to($adminEmails)->send(new EnquiryNotification($validated));

            return redirect()->back()
                ->with('success', 'Thank you for your enquiry. We will get back to you soon!');
        } catch (\Exception $e) {
            Log::error('Enquiry submission error: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Sorry, there was a problem sending your enquiry. Please try again later.');
        }
    }
}
