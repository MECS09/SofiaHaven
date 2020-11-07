<div class="topbar bg-maroon text-right">
    <ul class="inline-block">
        <li><a href="#">Guest Writers and Contributor</a></li>
        <li><a href="#">Community</a></li>
        <li>
            <form class="form-inline">
                <div class="md-form my-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
              </form>
        </li>
        <li><a href="{{route('login')}}">login</a></li>
    </ul>
</div>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
    <a class="navbar-brand pl-md-4 pl-sm-0" href="#">
      {{-- <img src="{{asset('img')}}/logo/sofia_logo.png" class="img-logo" alt=""> --}}
      Sofia
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-home"></i> Home
          </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> About </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="{{route('aboutme')}}">About Me</a>
              <a class="dropdown-item" href="{{route('editorscorner')}}">Editor's Corner</a>
            </div>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Stories </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                <a class="dropdown-item" href="{{route('standalone')}}">Stand Alone</a>
                <a class="dropdown-item" href="{{route('series')}}">Series</a>
              </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> Blog </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
            <a class="dropdown-item" href="{{route('travel-and-leisure')}}">Travel & Leisure</a>
            <a class="dropdown-item" href="{{route('events')}}">Events</a>
            <a class="dropdown-item" href="{{route('writing-tips')}}">Writing Tips</a>
            <a class="dropdown-item" href="{{route('random-thoughts')}}">Random Thoughts</a>
            <a class="dropdown-item" href="{{route('how-to-earn')}}">How to Earn</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">
            <i class="fas fa-phone"></i> Contact me</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->