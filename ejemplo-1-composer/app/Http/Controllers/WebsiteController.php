<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class WebsiteController extends Controller
{

    public function section($section) {

        $user = Session::get('name', 'usuario');
        $data = ['user' => $user, 'section' => $section];

        switch ($section) {
            case 'home';
                $date = date('d/m/y');
                $time = date('h:i');

                $data['date'] = $date;
                $data['time'] = $time;
            break;
            case 'who-we-are';
                $name = $user;
                $profession = 'Dev';
                $age = 19;

                $data['name'] = $name;
                $data['age'] = $age;
                $data['profession'] = $profession;
            break;
        }
        return view('website.'. $section, $data);
    }

    public function personalize(Request $request) {
        $name = $request->input('name');
        Session::put('name', $name);
        return redirect()->back();
    }

    public function sendContact(Request $request) {
        $input = $request->only('name', 'email', 'message');

        if ((!isset($input['name'])) || (!isset($input['email'])) || (!isset($input['message']))) {
            return view('website/contact-results/contact-error');
        }
        else {
            return view('website.contact-results/contact-success');
        }
    }
}
