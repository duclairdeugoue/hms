<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AboutController extends BaseController
{
    public function index()
    {
        return view('about');
    }
}
