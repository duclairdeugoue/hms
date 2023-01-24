<?php

namespace App\Libraries;

class RenderComponents
{

  public function viewHeader($data)
  {
    return view("components/header", $data);
  }
  public function viewFooter($data)
  {
    return view("components/footer", $data);
  }
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

  public function viewEvents($data)
  {
    return view("components/events", $data);
  }
}
