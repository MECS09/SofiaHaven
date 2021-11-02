<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        @include('inc.header')
        
        @livewireStyles
        @yield('styles')

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        {{-- <script type="text/javascript">  </script> --}}
        <script data-ad-client="ca-pub-6552033496045240" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
    <body oncopy="return false" oncut="return false" onpaste="return false">
        
        <div class="d-none">
            
            <img id="imgCap" src="{{asset('img/logo/Sofia-Pink_logo.png')}}"/>
            <div id="copyable">
                <img src="{{asset('img/logo/Sofia-Pink_logo.png')}}" alt="Copy Image to Clipboard via Javascript."/>
            </div>
            <div class="copyable">
                <img src="{{asset('img/logo/Sofia-Pink_logo.png')}}" alt="Copy Image to Clipboard via Javascript."/>
            </div>
        </div>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        @include('inc.navbar')
          
        
        @include('inc.alert')
        {{ $slot }}


        
        @include('inc.footer')

        @include('inc.scripts')
        @yield('scripts')
    </body>
</html>
