<header class="banner">
  <div class="container-fluid">
    <a class="brand" href="{{ home_url('/') }}">{{-- get_bloginfo('name', 'display') --}}</a>
    <nav class="nav-primary navbar navbar-expand-lg navbar-light bg-light" >
      <?php /* @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      */ ?>
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Intentional Interpreting</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="hamburger" role="navigation">
            <div id="menuToggle">
              <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            <ul id="menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Info</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
      </div>
    </nav>
  </div>
</header>
