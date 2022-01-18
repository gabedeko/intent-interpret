<header class="banner">
  <div class="container-fluid nav-container 
  <?php
  if ( is_front_page() ) {
      ?>
      home-nav-container
      <?php
  }
  ?>
  ">
    <a class="brand" href="{{ home_url('/') }}">{{-- get_bloginfo('name', 'display') --}}</a>

    <nav class="navbar navbar-expand-lg justify-content-between pl-0 pr-0 fixed-top
    <?php
    if ( ! is_front_page() ) {
        ?>
        not-home-navbar
        <?php
    }
    ?>">
      <?php /* @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      */ ?>
      <img class="header-logo" src="@asset('images/logo/intent_interp_logo.png')" alt="">
      <a class="navbar-brand
      <?php /*
      if ( ! is_front_page() ) {
          ?>
          not-home-navbar-brand
          <?php
      }
      */ ?>
      " href="/">Intentional Interpreting</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav
        <?php
        if ( is_front_page() ) {
            ?>
            home-navbar-nav
            <?php
        }
        ?>
        ">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
          <li class="nav-item"><a class="nav-link" href="#organization">Organizations</a></li>
          <li class="nav-item"><a class="nav-link" href="#rates">Rates</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#request" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Request Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/notary-services">Notary Public Services</a>
              <a class="dropdown-item" href="/tv-streaming-service">TV Streaming Service</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>
