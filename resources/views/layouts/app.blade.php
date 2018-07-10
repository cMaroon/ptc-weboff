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
        {{ __(' | ') . config('app.name', 'PTC-Official') }}
    </title>

    


  </head>

  <body class="text-center">
    @yield('content')

  
  </body>
</html>
