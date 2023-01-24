<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public $headerData = [
        'heading'   => 'Home',
        'navItemRooms' => false,
        'navItemAbout' => false,
        'navItemEvents' => false,
        'navItemHome' => true,
        'navItemContact' => false,
        'navItemReservation' => false,
    ];
    public $breadcrumbsData = [
        'heading'   => 'Home'
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

        return view('index', $data);
    }

}
