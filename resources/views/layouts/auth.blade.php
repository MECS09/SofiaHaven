<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        @include('inc.header')

        @yield('styles')
        <script data-ad-client="ca-pub-6552033496045240" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <!-- Scripts -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body class="bg-lightpink position-relative">
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <div class="fixed-top">
            
        @include('inc.navbar')
        </div>
        <div class="middle">
            
            <div class="container text-center">
                    
                <div class="row justify-content-center">
                    <div class="col-md-6 bg-white pt-5">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-maroon text-center py-2 text-white mt-5" style="border-top: solid #6e4435 1px">
            <small>© Sofia Haven Stories {{date('Y')}}. All rights reserved.</small>
        </div>
        @include('inc.scripts')
        @yield('scripts')
    </body>
</html>
