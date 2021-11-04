<x-guest-layout>
    <style>
        
    .content img {
            width: auto;
            height: 500px;
            margin: 0 auto;
            text-align: center;
    }
    @media only screen and (max-width: 600px) {
        .content img {
            width: 100%!important;
            height: auto!important;
        }
    }
    </style>
    <div class="blog py-5">
        <div class="container">

            <div class="card">
                <div class="card-header">
                Sofia's {{$blog->category}}
                </div>
                <div class="card-body">
                    <div class="blog-title"  style="background-image: url('{{asset("/img/blog-cover") ."/". $blog->cover_image}}')">
                        <div class="row py-3 justify-content-center">
                            <div class="col-sm-12 text-center" >
                                <h1>{{$blog->title}}</h1>
                            </div>
                            
                        </div>
                        <div class="row justify-content-center relative">
                            <div class="col-sm-4 text-center">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                      <img class="blog-author-thumb px-1" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->fist_name }}" />
                                    
                                @else
                                    <div>{{ Auth::user()->first_name }}</div>
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                            <i class="fas fa-user fa-lg"></i>
                                        </div>
                                @endif
                                <a href="#">
                                   
                                    Sofia's Haven
                                </a>
                            </div>
                            <div class="col-sm-3 text-center">
                                <span class="fas fa-comment px-1"></span>
                                50
                            </div>
                            <div class="col-sm-5 text-center">
                                <span class="fas fa-calendar-alt px-1"></span>
                                October 1, 2020</div>
                        </div>
                    </div>
                    
                    <div class="content pt-5">
                        @php
                            $content_desc = $blog->content;
                            echo html_entity_decode($content_desc, ENT_QUOTES);
                        @endphp
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>