<?php namespace App\Libraries;

class RenderSubComponents {

  public function viewRoom()
  {
    return view("sub_components/room_card");
  }

  public function viewEvenet()
  {
    return view("sub_components/event_card");
  }
}