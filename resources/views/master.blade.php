
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.metadata')

    <title>
        @if (isset($title))
            {{ $title }}
        @elseif (isset($titlePrepend))
            {{ $currentSection . __(' · ') . $titlePrepend }}
        @endif
        {{ __(' | ') . config('app.name', 'PTC-Official') }}
    </title>
</head>
<body id="top">
    <div id="app">
            @include('includes.header')
            @include('includes.navigation')
            @yield('content')
    </div>
    
    @yield('script')
    
</body>
</html>
