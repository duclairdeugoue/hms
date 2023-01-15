<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EventController extends BaseController
{
    public function index()
    {
        return view('events');
    }
}
