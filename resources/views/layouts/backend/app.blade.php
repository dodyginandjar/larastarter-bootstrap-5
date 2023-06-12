<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


<script defer src="{{ asset('assets/scripts/main.js')}}"></script>
<script defer src="{{ asset('assets/scripts/demo.js')}}"></script>
<script defer src="{{ asset('assets/scripts/toastr.js')}}"></script>
<script defer src="{{ asset('assets/scripts/scrollbar.js')}}"></script>
{{-- <script defer src="{{ asset('assets/scripts/fullcalendar.js')}}"></script>
<script defer src="{{ asset('assets/scripts/maps.js')}}"></script>
<script defer src="{{ asset('assets/scripts/chart_js.js')}}"></script> --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        {{-- header started --}}
        @include('layouts.backend.partials.header')
        {{-- end of header --}}
        
        {{-- main started --}}
            <div class="app-main">
                @include('layouts.backend.partials.sidebar')
                <div class="app-main__outer">
                    <div class="app-main__inner">
                    @yield('content')

                    </div>
                    @include('layouts.backend.partials.footer')   
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
        {{-- main ended --}}
    </div>
  <script src="{{ asset('assets/scripts/main.js') }}"></script>
   <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
