<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>mazo.studio</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </head>
    <body>
      <section class="container header">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand float-end" href="#">
              <x-application-logo height="90" class="align-text-top" />          
            </a>        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav mx-auto">
                <a class="nav-link" href="/">home</a>
                {{-- <a class="nav-link" href="#">about me</a> --}}
                <a class="nav-link" href="{{ route('projects.index') }}">projects</a>
                <a class="nav-link" href="mailto:qlaueen@gmail.com">contact me</a>
              </div>
            </div>
               
          </div>
        </nav>
      </section>
      <div class="min-h-screen">
          {{ $slot }}
      </div>
      <section class="footer ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between h-16">
            <div class="flex">
              <x-application-logo class="w-20 h-20" />
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
              <a class="inline-flex items-center px-1 pt-1 " href="/">home</a>
              {{-- <a class="inline-flex items-center px-1 pt-1 " href="http://localhost:8000/dashboard">about me</a> --}}
              <a class="inline-flex items-center px-1 pt-1 " href="{{ route('projects.index') }}">projects</a>
              <a class="inline-flex items-center px-1 pt-1 " href="mailto:qlaueen@gmail.com">contact</a>
              <a class="inline-flex items-center px-1 pt-1 " href="/login">admin login</a>

            </div>
          </div>
        </div>
      </section>
    </body>
</html>
