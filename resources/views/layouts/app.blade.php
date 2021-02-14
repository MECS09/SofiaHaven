<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @include('inc.header')

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        @yield('styles')

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script data-ad-client="ca-pub-6552033496045240" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        
        @if(auth()->user()->accesslevel == 'admin')
            
        <style>
            
            nav.bg-white.border-b.border-gray-100 {
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 9;
            }
                #wrapper {
                    padding-left: 70px;
                    transition: all .4s ease 0s;
                    height: 100%;
                    margin-top: 64px;
                }
        
                #sidebar-wrapper {
                    margin-left: -150px;
                    left: 70px;
                    width: 150px;
                    background: #222;
                    position: fixed;
                    height: 100%;
                    z-index: 10000;
                    transition: all .4s ease 0s;
                }
        
                .sidebar-nav {
                    display: block;
                    float: left;
                    width: 150px;
                    list-style: none;
                    margin: 0;
                    padding: 0;
                }
                #page-content-wrapper {
                    padding-left: 0;
                    margin-left: 0;
                    width: 100%;
                    height: auto;
                }
                #wrapper.active {
                    padding-left: 150px;
                }
                #wrapper.active #sidebar-wrapper {
                    left: 150px;
                }
        
                #page-content-wrapper {
                width: 100%;
                }
        
                #sidebar_menu li a, .sidebar-nav li a {
                    color: #fff!important;
                    display: block;
                    float: left;
                    text-decoration: none;
                    width: 150px;
                    background: #252525;
                    border-top: 1px solid #373737;
                    border-bottom: 1px solid #1A1A1A;
                    -webkit-transition: background .5s;
                    -moz-transition: background .5s;
                    -o-transition: background .5s;
                    -ms-transition: background .5s;
                    transition: background .5s;
                }
                .sidebar_name {
                    padding-top: 25px;
                    color: #fff;
                    opacity: .7;
                }
        
                .sidebar-nav li {
                line-height: 40px;
                text-indent: 20px;
                }
        
                .sidebar-nav li a {
                color: #fff;
                display: block;
                text-decoration: none;
                }
        
                .sidebar-nav li a:hover {
                color: #fff;
                background: rgba(255,255,255,0.2);
                text-decoration: none;
                }
        
                .sidebar-nav li a:active,
                .sidebar-nav li a:focus {
                text-decoration: none;
                }
        
                .sidebar-nav > .sidebar-brand {
                height: 65px;
                line-height: 60px;
                font-size: 18px;
                }
        
                .sidebar-nav > .sidebar-brand a {
                color: #fff;
                }
        
                .sidebar-nav > .sidebar-brand a:hover {
                color: #fff;
                background: none;
                }
        
                #main_icon {
                    float: right;
                    padding-right: 25px;
                    padding-top: 20px;
                }
                .sub_icon {
                    float: right;
                    padding-right: 25px;
                    padding-top: 10px;
                }
                .content-header {
                height: 65px;
                line-height: 65px;
                }
        
                .content-header h1 {
                margin: 0;
                margin-left: 20px;
                line-height: 65px;
                display: inline-block;
                }
                nav.bg-white.border-b.border-gray-100.fixed {
                    top: 0;
                    width: 100%;
                }
                @media (max-width:767px) {
                    #wrapper {
                        padding-left: 70px;
                        transition: all .4s ease 0s;
                    }
                    #sidebar-wrapper {
                        left: 70px;
                    }
                    #wrapper.active {
                        padding-left: 150px;
                    }
                    #wrapper.active #sidebar-wrapper {
                        left: 150px;
                        width: 150px;
                        transition: all .4s ease 0s;
                    }
                }   
            </style>
        @endif 
    </head>
    <body class="" style="max-height: 100vh;overflow: hidden!important;">
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>



        <div class="min-h-screen bg-gray-100">
            
            @livewire('navigation-dropdown')

            

            <div id="wrapper" class="active">
      
                <!-- Sidebar -->
                      <!-- Sidebar -->
                
                    
                @if (auth()->user()->accesslevel == 'admin')
                    <div id="sidebar-wrapper">
                    <ul id="sidebar_menu" class="sidebar-nav">
                         <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="fas fa-bars"></span></a></li>
                    </ul>
                      <ul class="sidebar-nav" id="sidebar">     
                        <li><a href="{{route('blog.list')}}">Blog<span class="sub_icon fas fa-book"></span></a></li>
                        <li><a href="{{route('user.list')}}">link2<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                      </ul>
                    </div>
                @endif

                <!-- Page content -->
                <div id="page-content-wrapper">
                  <!-- Keep all page content within the page-content inset div! -->
                  
                  <div class="page-content inset">
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                    <main class=" bg-silk" >
                        {{ $slot }}
                    </main>
                  </div>
                </div>
                
              </div>
            
                    
            <!-- Page Content -->
            
        </div>

        @stack('modals')

        @livewireScripts
        
        @include('inc.footer')
        @include('inc.scripts')
        @yield('scripts')

        <script>
            $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("active");
            });
        </script>
    </body>
</html>
