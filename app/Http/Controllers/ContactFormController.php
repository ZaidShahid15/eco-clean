<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmissionMail;
use App\Support\ContactFormMailHelper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactFormController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $validated = $request->validate(ContactFormMailHelper::rules($request));
        $payload = ContactFormMailHelper::payload($request, $validated);

        try {
            Mail::to(
                config('mail.contact.to.address'),
                config('mail.contact.to.name')
            )->send(new ContactFormSubmissionMail($payload));
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withInput()
                ->withErrors([
                    'contact_form' => 'We could not send your request right now. Please try again in a moment.',
                ]);
        }

        return back()->with('status', 'Your message has been sent successfully.');
    }
}
