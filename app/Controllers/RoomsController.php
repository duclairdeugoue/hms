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
    
    public $roomsData = null;
    public $footerData = null;



    public function index()
    {
        $roomModel = new RoomModel();
        $this->roomsData = $roomModel->getAllRooms();

        $data = [
            'headerData'                =>  $this->headerData,
            'breadcrumbsData'           =>  $this->breadcrumbsData,
            'roomsData'                 =>  $this->roomsData,
            'footerData'                =>  $this->footerData,
        ];

        return view('rooms', $data);
    }
}
