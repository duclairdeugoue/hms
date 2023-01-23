<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReservationController extends BaseController
{
    public $headerData = [
        'heading'   => 'Reservation'
    ];
    public $breadcrumbsData = [
        'heading'   => 'Reservation'
    ];
    public $roomsData = 6;
    public $eventsData = 3;
    public $footerData = null;


    public function index()
    {
        $data = [
            'headerData'                =>  $this->headerData,
            'breadcrumbsData'           =>  $this->breadcrumbsData,
            'roomsData'                 =>  $this->roomsData,
            'eventsData'                =>  $this->eventsData,
            'footerData'                =>  $this->footerData
        ];

    }
}
