<?php set_time_limit(0);?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      @include('includes.header-signin')


      <title>
        @if (isset($title))
            {{ $title }}
        @elseif (isset($titlePrepend))
            {{ $currentSection . __(' · ') . $titlePrepend }}
        @endif
        {{ __(' | ') . config('app.name', 'Pateros Technological College') }}
    </title>

    


  </head>

  <body class="text-center">
    @yield('content')

  
    @yield('script')

  </body>
</html>
