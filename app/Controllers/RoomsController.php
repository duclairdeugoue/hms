<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RoomsController extends BaseController
{
    public function index()
    {
        $data = [
            'breadcrumbsData'  => ['heading'   => 'Rooms'],
        ];
        return view('rooms', $data);

    }
}
