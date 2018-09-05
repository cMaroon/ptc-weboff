<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      @include('includes.header-dashboard')

      <title>
        @if (isset($title))
            {{ $title }}
        @elseif (isset($titlePrepend))
            {{ $currentSection . __(' · ') . $titlePrepend }}
        @endif
        {{ __(' | ') . config('app.name', 'Pateros Technological College') }}
    </title>
  </head>

  <body class="nav-md">
    @yield('content')

    @include('includes.footerjs')
  </body>
</html>
