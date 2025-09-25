<?php

namespace App\Console\Commands;

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendIndividualMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:ind_email {user} {--opt}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For sending individual email.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $args = $this->arguments();
        $opts = $this->options();
        $email = $args['user']->email;
        $emailData = [
            'subject' => 'Welcome to LearnVern',
            'body' => 'Welcome to LearnVern. This is the classic example of sending email using Laravel.',
            'tagline' => 'LEARN ANY COURSE FOR FREE IN YOUR OWN LANGUAGE UPDATED.'
        ];
        Mail::to((string) $email)
            //->cc('cc_email@mail.com')
            //->bcc('bcc_email@mail.com')
            ->locale('de')
            ->send(new WelcomeEmail($emailData));

    }
}
