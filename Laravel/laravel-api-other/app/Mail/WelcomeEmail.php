<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $emailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('meetshahlearnvern@gmail.com', 'LearnVern')
            ->replyTo('meetshahlearnvern@gmail.com', 'Reply To Email')
            ->subject($this->emailData['subject'])
            ->view('html_mail')
            ->with([
                'tagline' => $this->emailData['tagline']
            ])
            //->text('text_mail')
            ->attach(public_path('demo.pdf'), [
                'as' => 'Demo PDF File.pdf',
                'mime' => 'application/pdf'
            ])
            ->attach(public_path('lv_1250946121.jpg'), [
                'as' => 'Demo Image.jpg'
            ]);
    }
}
