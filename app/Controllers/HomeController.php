<?php

namespace App\Controllers;

use App\Models\EventModel;
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
    public $roomsData = [];
    public $eventsData = [];
    public $footerData = [];


    public function index()
    {
        $roomModel = new RoomModel();
        $eventModel = new EventModel();
        try {
            $this->roomsData = $roomModel->getAllRooms();
            $this->eventsData = $eventModel->getAllEvents();
        } catch (\Throwable $th) {
            // echo $th;
        }
       
        
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
