<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      <title>Admin Panel | Laura Mazoni</title>
    </head>
    <body>
      <div>
        <div>
          <div>
            <h1 class="text-center ">Admin Panel</h1>
          </div>
          <nav class="navbar navbar-expand bg-light">
            <div class="container-fluid">
              <ul class="navbar-nav nav-pills nav-fill">
                <li class="nav-item">
                  <a class="nav-link" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/admin/projects">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/admin/categories">Categories</a>
                </li>
              </ul>
              <form class="nav-link" method="POST" action="{{ route('logout') }}">
                  <button class="btn btn-outline-success me-2" type="button">
                  @csrf
                  <a href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </a>
                </button>
              </form>
            </div>
          </nav>
        </div>
        <main>
          {{  $slot }}
        </main>
      </div>
    </body>
</html>
