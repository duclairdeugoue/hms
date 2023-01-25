<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoomModel;

class RoomsController extends BaseController
{
    public $headerData = [
        'heading'   => 'Rooms',
        'navItemRooms' => true,
        'navItemAbout' => false,
        'navItemEvents' => false,
        'navItemHome' => false,
        'navItemContact' => false,
        'navItemReservation' => false,
    ];
    public $breadcrumbsData = [
        'heading'   => 'Rooms',
    ];
    
    public $roomsData = 6;
    public $footerData = null;



    public function index()
    {
        $roomModel = new RoomModel();

        $data = [
            'headerData'                =>  $this->headerData,
            'breadcrumbsData'           =>  $this->breadcrumbsData,
            'roomsData'                 =>  $roomModel->getAllRooms(),
            'footerData'                =>  $this->footerData
        ];

        return view('rooms', $data);
    }
}
