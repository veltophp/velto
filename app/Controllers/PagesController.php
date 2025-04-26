<?php

namespace App\Controllers;

use Velto\Core\Controller;
use Velto\Core\Mail;


class PagesController extends Controller
{

    public function example() {
    
    
        return view('pages.example-page');
    }    
    
    public function contact_send()
    {
        $data = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'message' => request()->input('message'),
        ];

        $to = ''; //give the email receiver
        $subject = 'New Contact Form Submission'; //change the subject as you wish
        $template = 'contact-mail'; //template from views/mails

        $send = Mail::send($to, $subject, $template, $data);

        if ($send) {
                return redirect('/contact?status=success'); 

            } else {
            
                return redirect('/contact?status=fail'); 
        }

    }
}