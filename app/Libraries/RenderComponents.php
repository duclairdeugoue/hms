<?php namespace App\Libraries;

class RenderComponents {

  public function viewRooms()
  {
    return view("components/rooms");
  }

  public function viewSearchbar()
  {
    return view("components/search_bar");
  }

  public function viewBreadcrumbs()
  {
    return view("components/breadcrumbs");
  }
}