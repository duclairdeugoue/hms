<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RoomsController extends BaseController
{
    public $headerData = [
        'heading'   => 'Contact Us'
    ];
    public $breadcrumbsData = [
        'heading'   => 'Contact Us'
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

        return view('rooms', $data);
    }
}
