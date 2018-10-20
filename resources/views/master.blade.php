
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
        {{ __(' | ') . config('app.name', 'Pateros Technological College') }}
    </title>
</head>
<body >
    <div>
       
        @include('includes.header')
        @include('includes.navigation')
        @yield('content')
        
        <button class="go-to-top go-to-top--image">{{-- to add image background: go-to-top--image --}}
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
    
    @yield('script')
   
</body>
</html>
