<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContactController extends BaseController
{
    public function index()
    {
        return view('contact');
    }
}
