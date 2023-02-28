<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReservationController extends BaseController
{
    public $headerData = [
        'heading'   => 'Reservation',
        'navItemRooms' => false,
        'navItemAbout' => false,
        'navItemEvents' => false,
        'navItemHome' => false,
        'navItemContact' => false,
        'navItemReservation' => true,
    ];
    public $breadcrumbsData = [
        'heading'   => 'Reservation'
    ];
    public $roomsData = 6;
    public $eventsData = 3;
    public $footerData = [];


    public function index()
    {
        $data = [
            'headerData'                =>  $this->headerData,
            'breadcrumbsData'           =>  $this->breadcrumbsData,
            'roomsData'                 =>  $this->roomsData,
            'eventsData'                =>  $this->eventsData,
            'footerData'                =>  $this->footerData
        ];

        return view('reservation', $data);
    }

    public function reserve() {
        echo view('');
    }
    
}
