<?php

namespace App\Controllers;

use Velto\Core\Controller;
use Velto\Core\Mail;


class PagesController extends Controller
{ 

    public function contact() {

        return view('pages.contact');
    }
    
    public function contactSend()
    {

        $request = request()->all();

        $errors = validate($request, [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'message' => 'required|string|max:160',
        ]);
    
        if (!empty($errors)) {
            flash()->error($errors);
            return to_route('contact');
        }

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message'],
        ];

        $to = 'danayasa2@gmail.com'; 
        $subject = 'New Contact Form Submission'; 
        $template = 'contact-mail';

        $send = Mail::send($to, $subject, $template, $data);

        if ($send) {

            flash()->success('Your message has been sent successfully. We will get back to you soon!');
            return to_route('contact');

            } else {

            flash()->error('Something went wrong. Please try again or contact us directly.');
            return to_route('contact');
        }

    }

}