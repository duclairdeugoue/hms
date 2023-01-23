<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EventsController extends BaseController
{
    public function index()
    {
        return view('events');
    }
}
