<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ action('PostsController@index') }}">All Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ action('Auth\AuthController@getLogout') }}">Logout</a>
      </li>
    </ul>
  </div>
</nav>
