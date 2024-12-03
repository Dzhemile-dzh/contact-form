<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use App\Mail\InquiryNotification;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_validates_the_contact_form()
    {
        $response = $this->postJson('/contact', []);
        $response->assertStatus(422); // Validation failed

        $response->assertJsonValidationErrors([
            'name',
            'email',
            'phone',
            'message'
        ]);
    }
    /** @test */
    public function it_sends_an_email_notification()
    {
        Mail::fake(); // Prevent actual email sending

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'message' => 'This is a test message',
        ];

        // Submit the form
        $response = $this->postJson('/contact', $data);
        $response->assertStatus(200);

        Mail::assertSent(InquiryNotification::class, function ($mail) use ($data) {
            return $mail->inquiry->name === $data['name']
                && $mail->inquiry->email === $data['email']
                && $mail->inquiry->phone === $data['phone']
                && $mail->inquiry->message === $data['message'];
        });
    }
}
