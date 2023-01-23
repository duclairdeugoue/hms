<?php

namespace App\Libraries;

class RenderComponents
{

  public function viewRooms($data)
  {
    return view("components/rooms", $data);
  }

  public function viewSearchbar($data)
  {
    return view("components/search_bar", $data);
  }

  public function viewBreadcrumbs($data)
  {
    return view("components/breadcrumbs", $data);
  }

  public function viewOffers($data)
  {
    return view("components/offers", $data);
  }
}
