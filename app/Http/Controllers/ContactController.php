<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email',
            'mobile' => 'required|string|max:15',
            'tour'   => 'nullable|string|max:500',
        ]);

        // Collect values
        $messageBody = "
        New Contact Form Submission

        Name:   {$request->name}
        Email:  {$request->email}
        Mobile: {$request->mobile}
        Tour:   {$request->tour}
        Source: {$request->source}
        ";

        // Send email
        Mail::raw($messageBody, function($message) {
            $message->to(['support@evonixtech.com', 'info@elephuswild.com'])
                    ->subject('New Contact Form Submission');
        });

        return redirect()->route('thank.you')
        ->with('success', 'Thank you for submitting your inquiry. Our team will get back to you soon.');
    }
}
