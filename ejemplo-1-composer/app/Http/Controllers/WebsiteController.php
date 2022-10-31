<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class WebsiteController extends Controller
{

    public function home() {
        $date = date('d/m/y');
        $time = date('h:i');

        $section = 'home';

        $user = Session::get('name', 'usuario');

        return view('website.home', [
            'section' => $section,
            'date' => $date,
            'time' => $time,
            'user' => $user
        ]);
    }

    public function personalize(Request $request) {
        $name = $request->input('name');
        Session::put('name', $name);
        return redirect()->back();
    }

    public function who() {
        $name = 'Andreu';
        $profession = 'Dev';
        $age = 19;
        $section = 'who';

        $user = Session::get('name', 'usuario');

        return view('website.who-we-are', [
            'name' => $name,
            'profession' => $profession,
            'age' => $age,
            'section' => $section,
            'user' => $user
        ]);
    }

    public function contact() {
        return view('website.contact');
    }

    public function sendContact() {
        return view('website.contact-results/contact-success');
        return view('website/contact-results/contact-error');
    }
}
