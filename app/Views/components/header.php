<header class="site-header js-site-header">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.html">Sogo Hotel</a></div>
      <div class="col-6 col-lg-8">


        <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <!-- END menu-toggle -->

        <div class="site-navbar js-site-navbar">
          <nav role="navigation">
            <div class="container">
              <div class="row full-height align-items-center">
                <div class="col-md-6 mx-auto">
                  <ul class="list-unstyled menu">
                    <li class="<?= $navItemHome ? "active" : "" ?>"><a href="/">Home</a></li>
                    <li class="<?= $navItemRooms ? "active" : "" ?>"><a href="/rooms">Rooms</a></li>
                    <li class="<?= $navItemAbout ? "active" : "" ?>"><a href="/about">About</a></li>
                    <li class="<?= $navItemEvents ? "active" : "" ?>"><a href="/events">Events</a></li>
                    <li class="<?= $navItemContact ? "active" : "" ?>"><a href="/contact">Contact</a></li>
                    <li class="<?= $navItemReservation ? "active" : "" ?>"><a href="/reservation">Reservation</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>