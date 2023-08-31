<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laura Mazoni | Developer</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- Scripts -->
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

      </head>
    <body>
      <x-navbar/>
      <div class="container">
          {{ $slot }}
      </div>
      <section class="footer ">
        <div class="max-w-7xl mx-auto">
          <div class="flex justify-between h-16">
            <div class="flex">
              <x-application-logo height="25"/>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
              <a class="inline-flex items-center px-1 pt-1 " href="/">home</a>
              {{-- <a class="inline-flex items-center px-1 pt-1 " href="http://localhost:8000/dashboard">about me</a> --}}
              <a class="inline-flex items-center px-1 pt-1 " href="{{ route('projects.index') }}">projects</a>
              <a class="inline-flex items-center px-1 pt-1 " href="/login">admin login</a>

            </div>
          </div>
        </div>
      </section>
    </body>
</html>
