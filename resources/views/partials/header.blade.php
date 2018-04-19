<header class="banner">
  <div class="container align-items-center">
    <a class="brand" href="{{ home_url('/') }}">
    @if (!get_field('logo', 'options'))
        <img src="{{ get_field('logo', 'options') }}" />
    @else
        {{ get_bloginfo('name', 'display') }}
    @endif
    </a>

    <nav class="nav-primary navbar navbar-expand-lg navbar-light bg-light">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu($primarymenu) !!}
        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </nav>
  </div>
</header>
