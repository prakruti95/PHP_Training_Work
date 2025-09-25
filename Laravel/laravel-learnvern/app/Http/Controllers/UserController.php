<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

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
}
