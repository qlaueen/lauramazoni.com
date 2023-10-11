<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laura Mazoni | Developer</title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

      </head>
    <body>
      <x-navbar/>
      <div>
          {{ $slot }}
      </div>
    </body>
</html>
