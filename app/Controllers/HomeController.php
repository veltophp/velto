<?php

/**
 * Class HomeController in namespace App\Controllers.
 */

namespace App\Controllers;

use Velto\Core\Controller;


class HomeController extends Controller {
    public function index() {

        $title = 'Velto';

        return view('home', ['title' => $title]);

    }


    public function example() {

        $title = 'Example Page';

        return view ('pages.example-page',['title' => $title]);

    }

}
