<?php set_time_limit(0);?>
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
    <div id="app">
      
        @yield('content')

    </div>

    @yield('script')

    
    <script src="{{ asset('js/app.js') }}"></script>   
    @include('includes.footerjs') 
  </body>
</html>
