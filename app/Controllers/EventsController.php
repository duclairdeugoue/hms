<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventModel;

class EventsController extends BaseController
{
    public $headerData = [
        'heading'   => 'Events',
        'navItemRooms' => false,
        'navItemAbout' => false,
        'navItemEvents' => true,
        'navItemHome' => false,
        'navItemContact' => false,
        'navItemReservation' => false,
    ];
    public $breadcrumbsData = [
        'heading'   => 'Events'
    ];
    public $roomsData = 6;
    public $eventsData = 3;
    public $footerData = null;


    public function index()
    {
        $evemtModel = new EventModel();
        $data = [
            'headerData'                =>  $this->headerData,
            'breadcrumbsData'           =>  $this->breadcrumbsData,
            'roomsData'                 =>  $this->roomsData,
            'eventsData'                =>  $evemtModel->getAllEvents(),
            'footerData'                =>  $this->footerData
        ];

        return view('events', $data);
    }
}
