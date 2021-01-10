<div class="topbar bg-maroon text-right">
    <ul class="inline-block">
        <li><a class="text-white" href="#">Guest Writers and Contributor</a></li>
        <li><a class="text-white" href="#">Community</a></li>
        <li>
            <form class="form-inline">
                <div class="md-form my-0">
                  <input class="form-control px-3 my-1 rounded-pill bg-white" type="text" placeholder="Search" aria-label="Search">
                </div>
              </form>
        </li>
        @if (Route::has('login'))
                @auth
                    {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a> --}}
                    {{-- @livewire('navigation-dropdown') --}}
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            
                          <img class="rounded-circle nav-p-img" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            
                        @else
                          {{ Auth::user()->name }}
                            
                        @endif
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-default"
                        aria-labelledby="navbarDropdownMenuLink-333">
                        <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                        <a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf

                          <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                              {{ __('Logout') }}</a>
                      </form>
                      </div>
                    </li>
                @else
                <li>
                                    
                  @if (\Request::is('login', 'register')) 
                  <a class="text-white" href="{{route('login')}}">Login</a>
                   
                  @else
                    <a class="text-white" href="#login" data-toggle="modal" >Login</a>
                  @endif
                </li>
                    @if (Route::has('register'))
                        
                    <li>
                      
                      @if (\Request::is('login', 'register'))  
                      <a class="text-white" href="{{route('register')}}">Register</a>
                      
                      @else
                      <a class="text-white" href="#register" data-toggle="modal" >Register</a>
                      @endif
                    </li>
                    @endif
                @endif
        @endif
        
        
    </ul>
</div>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand pl-md-4 pl-sm-0" href="#">
      {{-- <img src="{{asset('img')}}/logo/sofia_logo.png" class="img-logo" alt=""> --}}
      <img class="img-responsive img-logo"  src="{{asset('img/logo/Sofia-Pink_logo.png')}}" alt="Sofia haven Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item  @if(\Request::is('home')) active @endif">
          <a class="nav-link hvr-underline-from-left" href="{{route('home')}}">
            <i class="fas fa-home"></i> Home
          </a>
        </li>
        <li class="nav-item  @if(\Request::is('about') || \Request::is('editors-corner')) active @endif dropdown">
            <a class="nav-link dropdown-toggle hvr-underline-from-left" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="far fa-address-card"></i> About </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item hvr-underline-from-left" href="{{route('aboutme')}}">About Me</a>
              <a class="dropdown-item hvr-underline-from-left" href="{{route('editorscorner')}}">Editor's Corner</a>
            </div>
        </li>
        <li class="nav-item @if(\Request::is('stand-alone') || \Request::is('series')) active @endif dropdown">
              <a class="nav-link dropdown-toggle hvr-underline-from-left" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-book"></i> Stories </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                <a class="dropdown-item hvr-underline-from-left" href="{{route('standalone')}}">Stand Alone</a>
                <a class="dropdown-item hvr-underline-from-left" href="{{route('series')}}">Series</a>
              </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle hvr-underline-from-left" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-route"></i> Blog </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
            <a class="dropdown-item hvr-underline-from-left" href="{{route('travel-and-leisure')}}">Travel & Leisure</a>
            <a class="dropdown-item hvr-underline-from-left" href="{{route('events')}}">Events</a>
            <a class="dropdown-item hvr-underline-from-left" href="{{route('writing-tips')}}">Writing Tips</a>
            <a class="dropdown-item hvr-underline-from-left" href="{{route('random-thoughts')}}">Random Thoughts</a>
            <a class="dropdown-item hvr-underline-from-left" href="{{route('how-to-earn')}}">How to Earn</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link hvr-underline-from-left" href="{{route('contact')}}">
            <i class="fas fa-phone"></i> Contact me</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->