<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContactController extends BaseController
{
    public $headerData = [
        'heading'   => 'Contact Us',
        'navItemRooms' => false,
        'navItemAbout' => false,
        'navItemEvents' => false,
        'navItemHome' => false,
        'navItemContact' => true,
        'navItemReservation' => false,
    ];
    public $breadcrumbsData = [
        'heading'   => 'Contact Us'
    ];
    public $eventsData = 3;
    public $footerData = null;


    public function index()
    {
        $data = [
            'headerData'                =>  $this->headerData,
            'breadcrumbsData'           =>  $this->breadcrumbsData,
            'eventsData'                =>  $this->eventsData,
            'footerData'                =>  $this->footerData
        ];

        return view('contact',$data);
    }
}
