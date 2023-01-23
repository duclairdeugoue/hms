<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReservationController extends BaseController
{
    public function index()
    {
        $data = [
            'breadcrumdsData'  => ['heading'   => 'Reservation'],
        ];
        return view('reservation', $data);

    }
}
