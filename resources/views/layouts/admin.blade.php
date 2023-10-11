<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laura Mazoni | Developer</title>
    </head>
    <body>
      <div>
        <div @click.away="open = false" x-data="{ open: false }">
          <div>
            <h1>Admin Panel</h1>
          </div>
          <nav>
            <x-admin-nav-link :href="route('admin.projects.index')" :active="request()->routeIs('admin.projects.index')">
              {{ __('Projects') }}
            </x-admin-nav-link>
            <x-admin-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
              {{ __('Categories') }}
            </x-admin-nav-link>
            <div @click.away="open = false" x-data="{ open: false }">
                <button @click="open = !open">
                    <span>{{ Auth::user()->name }}</span>
                </button>
                <div x-show="open">
                    <div >
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    </div>
                </div>
            </div>
          </nav>
        </div>
        <main>
          {{  $slot }}
        </main>
      </div>
    </body>
</html>
