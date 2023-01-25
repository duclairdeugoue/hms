<?php

namespace App\Controllers;
use App\Models\RoomModel;

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
    public $roomsData = null;
    public $eventsData = 3;
    public $footerData = null;


    public function index()
    {
        $roomModel = new RoomModel();
        $this->roomsData = $roomModel->getAllRooms();
        
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
