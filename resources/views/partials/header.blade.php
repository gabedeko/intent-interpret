<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{-- get_bloginfo('name', 'display') --}}</a>

    <nav class="navbar navbar-expand-lg justify-content-between">
      <?php /* @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      */ ?>
      <a class="navbar-brand" href="#">Intentional Interpreting</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item nav-link" href="#">Info</a>
          <a class="nav-item nav-link disabled" href="#">Contact</a>
        </div>
      </div>
    </nav>
  </div>
</header>
