<x-guest-layout>
    @section('styles')
        <link rel="stylesheet" href="{{asset('')}}plugins/owl/owlcarousel/assets/owl.carousel.css">
    @endsection


    <div class="slider-featured py-5">
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-slide" data-ride="carousel">
            {{-- <!--Indicators-->
            <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators--> --}}
            <!--Slides-->
            <div class="carousel-inner" role="listbox">

            @if ($featured_books->count() > 0)
                
                @foreach ($featured_books as $key => $books)
                    
                    <div class="carousel-item @if ($key === 0) active @endif">
                        <div class="row justify-content-md-center">
                            <div class="col-sm-3 p-4">
                            <img class="d-block w-100 featured-book-cover" src="{{asset('/img/book-cover') .'/'. $books->cover}}" alt="First slide">
                            </div>
                            <div class="col-sm-6 relative">
                                <div class="featured-content-holder">
                                    
                                    <div class="text-center">
                                        <h1 class="title">{{$books->title}}</h1>
                                        
                                        <div class="ellipsis content-wrapper">
                                            @php
                                                $str = $books->description;
                                                echo html_entity_decode($str, ENT_QUOTES); // Converts double and single quotes
                                            @endphp
                                        </div>
                                        <h6 class="genre" data-value>{{$books->genre}}</h6>

                                    
                                        <div class="writer">
                                            @php
                                                $author = DB::table('users')->where('id',$books->author)->first();
                                            @endphp
                                            <h5 class="text-center">By: {{$author->name}}</h5>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            @else
            <div class="carousel-item active">
                <div class="row justify-content-md-center">
                    <div class="col-sm-3 p-4">
                    <img class="d-block w-100 featured-book-cover" src="{{asset('')}}img/book cover/placeholder1.jpg" alt="First slide">
                    </div>
                    <div class="col-sm-6 relative">
                        <div class="featured-content-holder">
                            
                            <h3 class="text-center">
                                This is a dummy data, No Storries to be featured at the moment
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!--First slide-->
            
            <!--/First slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>

    <div class="author-welcome relative my-5">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-sm-10 text-center relative">
                    <div class="welcome-note p-5 ">
                        <h1>Hi this is <i>Sofia</i></h1>
                        <p>Welcome to Sofia The Romatic Traveler</p>
                        {{-- <a href="#" class="btn rounded-10 bg-maroon text-white">Start Reading</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="trending-stories">
        <div class="container">
            <h1>Featured Stories</h1>
            <div class="story-list mt-5  pt-5">
                

                @if ($featured_books->count() > 0)
                    
                    @foreach ($featured_books as $key => $books)
                        <div class="row bg-lightpink py-5 justify-content-lg-center mt-3">
                            <div class="col-sm-3">
                                <img class="d-block w-100 stories-book-cover p-10" src="{{asset('/img/book-cover') .'/'. $books->cover}}" alt="">
                            </div>
                            <div class="col-sm-7">
                                <div class="stories-caption px-3">
                                    <h1 class="title">{{$books->title}}</h1>
                                    <h6 class="genre">{{$books->genre}}</h6>
                                    {{-- <div class="star-ratings-css">
                                        <div class="star-ratings-css-top" style="width: 93%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                        <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                        
                                    </div>
                                    <div class="data">
                                        <h5><i class="fas fa-eye"></i> 5.1M</h5>
                                    </div> --}}
                                    <div class="description ellipsis">
                                        @php
                                            $str = $books->description;
                                            echo html_entity_decode($str, ENT_QUOTES); // Converts double and single quotes
                                        @endphp
                                    </div>
                                    <a href="{{route('book.show', $books->id)}}" class="btn rounded-10 bg-maroon text-white">Start Reading</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </div>


    <div class="container-fluid bg-maroon mt-5">
        <div class="slider-section px-5 pt-5">
            <div class="row justify-content-md-center">
                <div class="col-sm-12">
                    <div class="owl-carousel owl-theme">

                        @if ($latest_release->count() > 0)
                    
                            @foreach ($latest_release as $latest)
                                
                                <div class="item">
                                    
                                    <a href="{{route('book.show', $latest->id)}}">
                                        <img class="d-block w-100" src="{{asset('/img/book-cover') .'/'. $latest->cover}}"
                                    alt="{{$latest->title}} Book Cover">
                                    </a>
                                    <div class="stories-caption py-3">
                                        <a href="{{route('book.show', $latest->id)}}">
                                            <h3 class="title text-white capitalize">{{$latest->title}}</h3>
                                        </a>
                                        
                                        <div class="star-ratings-css">
                                            {{-- <div class="star-ratings-css-top" style="width: 93%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                        <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div> --}}
                                        
                                        </div>
                                        {{-- <div class="data">
                                            <h6 class="text-white"><i class="fas fa-eye"></i> 5.1M</h6>
                                        </div> --}}
                                    </div>
                                </div>
                            @endforeach
                        
                        @endif
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    @foreach ($announcement as $item)
    
    <div class="modal fade" id="advertisement{{$item->id}}"
        tabindex="-1"
        aria-labelledby="advertisementLabel"
        aria-hidden="true"
        >
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="advertisementLabel">{{$item->title}}</h5>
                
            </div>
            <div class="modal-body">
                <h5>{!! $item->content !!}</h5>
                
                <div class="text-center">
                    <img style="height: 50vh; width: auto;" src="{{asset('img/announcement-cover/')}}/{{$item->image}}" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Dismis
                </button>
                <a type="button" class="btn btn-primary bg-maroon" target="_blank" href="{{$item->link}}">
                    Read More
                </a>
            </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(window).on('load',function(){
            $('#advertisement{{$item->id}}').modal('show');
        });
    </script>
    
        
    @endforeach
    
    @section('scripts')
        <script src="{{asset('')}}plugins/owl/owlcarousel/owl.carousel.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                @if ($latest_release->count() > 5)
                    loop:true,
                @endif
                margin:10,
                nav:true,
                navText:["<div class='nav-btn prev-slide'><i class='fas fa-angle-left'></i></div>","<div class='nav-btn next-slide'><i class='fas fa-angle-right'></i></div>"],
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        </script>
        
        <script>
            $("[data-value]").each(function(){
                var words = $(this).text().split(",");
                $(this).text("");
                for(var i=0; i< words.length; i++){
                    $(this).append("<span class='badge badge-secondary mr-1 p-2 rounded-pill'>"+words[i]+ ((i< words.length-1) ? ",":"").replace(",", "")+"</span>");
                    
                }
            });
        </script>

        
    @endsection
    
</x-guest-layout>