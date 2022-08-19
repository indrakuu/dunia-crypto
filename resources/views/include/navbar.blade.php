    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky">
      <div class="container">
        <a href="/" class="navbar-brand">Dunia<span class="text-primary">Crypto</span></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item {{ request()->is('cryptocurrencies*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('crypto') }}">Cryptocurrencies</a>
            </li>
            <li class="nav-item {{ request()->is('exchanges*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('exchanges') }}">Exchanges</a>
            </li>
            <li class="nav-item {{ request()->is('categories*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('categories') }}">Categories</a>
            </li>
            <li class="nav-item {{ request()->is('about*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Download Project</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>