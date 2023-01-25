<?php namespace App\Libraries;

class RenderSubComponents {

  public function viewRoom($roomData)
  {
    return view("sub_components/room_card", $roomData);
  }

  public function viewEvent($eventData)
  {
    return view("sub_components/event_card", $eventData);
  }
}