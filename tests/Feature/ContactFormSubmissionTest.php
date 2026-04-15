<?php

namespace Tests\Feature;

use App\Mail\ContactFormSubmissionMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormSubmissionTest extends TestCase
{
    public function test_contact_form_submission_sends_an_email(): void
    {
        Mail::fake();

        config()->set('mail.contact.to.address', 'Ast.mediainternational@gmail.com');
        config()->set('mail.contact.to.name', 'ecoclean');

        $response = $this->post(route('contact.submit'), [
            'names' => [
                'first_name' => 'ecoclean',
                'last_name' => 'ecoclean',
            ],
            'email' => 'sender@example.com',
            'phone' => '+92-300-0000000',
            'message' => 'Testing the contact form pipeline.',
            'dropdown' => 'Window Cleaning',
            '_wp_http_referer' => '/kontakt/',
        ]);

        $response
            ->assertRedirect()
            ->assertSessionHas('status', 'Your message has been sent successfully.');

        Mail::assertSent(ContactFormSubmissionMail::class, function (ContactFormSubmissionMail $mail) {
            return $mail->hasTo('1zaidshaikh234@gmail.com')
                && $mail->payload['email'] === 'sender@example.com'
                && $mail->payload['subject'] === 'Window Cleaning';
        });
    }
}
