{{-- Metas --}}
<meta charset="utf-8">
<meta name="description" content="Pateros Technological College Official Website">
<meta name="keywords" content="PTC">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-param" content="_token">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

{{-- Links --}}
<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 
<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{-- Scripts --}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
