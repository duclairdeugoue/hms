<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public $headerData = [
        'heading'   => 'Rooms'
    ];
    public $breadcrumbsData = [
        'heading'   => 'Rooms'
    ];
    public $roomsData = 6;
    public $eventsData = null;
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
