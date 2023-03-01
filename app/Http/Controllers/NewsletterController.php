<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email_address' => 'required|email'
        ]);

        try {
            $newsletter->subscribe(request('email_address'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email_address' => 'Email could not be added to our newsletter list.'
            ]);
        }

        return redirect('/')->with('success', 'You are now subscribed to the our newsletter list.');
    }
}
