<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      @if(Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="{{ action('UsersController@show', Auth::id()) }}">Welcome {{ Auth::user()->name }}!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ action('PostsController@create') }}">Create a Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ action('Auth\AuthController@getLogout') }}">Logout</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ action('Auth\AuthController@getLogin') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ action('Auth\AuthController@getRegister') }}">Register</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ action('PostsController@index') }}">All Posts</a>
      </li>
      @if(Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="{{ action('UsersController@index') }}">All Users</a>
      </li>
      @endif
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{ action('PostsController@index') }}">
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
