<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'WMovies') }}</a> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/films">Films</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">{{ __('Register') }}</a>
            </li>
      </ul>
    </div>
</nav>