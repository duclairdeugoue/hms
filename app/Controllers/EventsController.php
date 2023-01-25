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
    public $eventsData = null;
    public $footerData = null;


    public function index()
    {
        $eventModel = new EventModel();
        $this->eventsData = $eventModel->getAllEvents();

        $data = [
            'headerData'                =>  $this->headerData,
            'breadcrumbsData'           =>  $this->breadcrumbsData,
            'eventsData'                =>  $this->eventsData,
            'footerData'                =>  $this->footerData
        ];

        return view('events', $data);
    }
}
