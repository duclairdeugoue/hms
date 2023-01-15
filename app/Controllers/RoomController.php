<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RoomController extends BaseController
{
    public function index()
    {
        return view('rooms');

    }
}
