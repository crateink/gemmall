<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function homeView(): string
    {
        auth()->user();
        return view('index');
    }

    public function contactUsView(): string
    {
        auth()->user();
        return view('contact_us');
    }
}
