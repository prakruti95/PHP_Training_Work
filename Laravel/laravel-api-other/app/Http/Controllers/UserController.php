<?php

namespace App\Http\Controllers;

use App\Jobs\EmailJob;
use App\Mail\WelcomeEmail;
use App\Models\Brands;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function accessors(Request $request)
    {
        $users = User::get();
        return view('accessors', compact('users'));
    }

    public function mutators(Request $request)
    {
        $user = User::find(1);
        $user->email = 'MeetSHAH@Mail.CoM';
        $user->user_name = 'meetshah';
        $user->save();
        return redirect()->route('accessors');
    }

    public function getUsers(Request $request, User $users, Brands $brand)
    {
        echo "<pre>";
        print_r([$users, $brand]);
        exit;
    }

    public function explicitGetUsers(Request $request, $users)
    {
        echo "<pre>";
        print_r($users);
        exit;
    }

    public function localization(Request $request)
    {
        $locale = App::currentLocale();
        /*echo "<hr>";
        echo "<h1>$locale</h1>";
        echo "<hr>";*/
        //$setLocale = App::setLocale('hi');
        /* $newLocale = App::currentLocale();*/
        /*echo "<hr>";
        echo "<h1>$newLocale</h1>";
        echo "<hr>";
        exit;*/
        /* if (App::isLocal('hi')) {
             echo "<h1>LearnVern में आपका स्वागत है</h1>";
         } else {
             echo "<h1>Welcome to LearnVern</h1>";
         }*/
        /* echo "<hr>";
         echo __('welcome');
         echo "<hr>";*/

        /*echo "<hr>";
        echo __('message.description', ['language' => 'Python']);
        echo "<hr>";*/


        echo "<hr>";
        echo trans_choice('message.framework', 2, ['language' => 'Laravel and CodeIgnitor', 'value' => 3]);
        echo "<hr>";

    }

    public function changeLanguage(Request $request, $language)
    {
        if (array_key_exists($language, Config::get('languages'))) {
            session(['appLanguage' => $language]);
        }
        return redirect()->back();
    }

    public function sendEmail(Request $request)
    {
        $emailData = [
            'subject' => 'Welcome to LearnVern',
            'body' => 'Welcome to LearnVern. This is the classic example of sending email using Laravel.',
            'tagline' => 'LEARN ANY COURSE FOR FREE IN YOUR OWN LANGUAGE UPDATED.'
        ];
        Mail::to('to_email@mail.com')
            //->cc('cc_email@mail.com')
            //->bcc('bcc_email@mail.com')
            ->locale('gu')
            ->send(new WelcomeEmail($emailData));
    }

    public function queue(Request $request)
    {
        $requestData = $request->only('emails');
        $emails = explode(',', $requestData['emails']);
        foreach ($emails as $email) {
            dispatch(new EmailJob($email));
        }
        return redirect()->to('queue')->with('success', 'Email processing started.');
    }

    public function exceuteCommand(Request $request)
    {
        $data = Artisan::call('send:ind_email', ['user' => 'meet@mail.com', '--opt' => 'testOpt']);
        return $data;
    }

    public function exceuteCommandWithBinding(Request $request, User $users)
    {
        $data = Artisan::call('send:ind_email', ['user' => $users, '--opt' => 'testOpt']);
        return $data;
    }
}

