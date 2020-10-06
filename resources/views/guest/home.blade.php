
<x-guest-layout>
    @section('styles')
        <link rel="stylesheet" href="{{asset('')}}plugins/owl/owlcarousel/assets/owl.carousel.css">
    @endsection


    <div class="slider-featured py-5">
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-slide" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
               <div class="row justify-content-md-center">
                   <div class="col-sm-3 p-4">
                    <img class="d-block w-100 featured-book-cover" src="{{asset('')}}img/book cover/placeholder1.jpg" alt="First slide">
                   </div>
                   <div class="col-sm-6 relative">
                       <div class="featured-content-holder">
                           
                            <h3 class="text-center">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, rerum? Doloremque voluptates quisquam amet quo veritatis fugiat architecto repellat. Pariatur assumenda ex temporibus saepe ea, illo placeat! Quaerat, obcaecati odio.
                            </h3>
                       </div>
                   </div>
               </div>
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <div class="row justify-content-md-center">
                    <div class="col-sm-3 p-4">
                     <img class="d-block w-100 featured-book-cover" src="{{asset('')}}img/book cover/placeholder1.jpg" alt="First slide">
                    </div>
                    <div class="col-sm-6 relative">
                        <div class="featured-content-holder">
                            
                        <h3 class="text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi natus incidunt, molestias impedit officiis quis dolorem reprehenderit amet exercitationem, delectus rerum non. Ipsum ullam veritatis, nobis cupiditate minima recusandae.
                        </h3>
                        </div>
                    </div>
                </div>
             </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <div class="row justify-content-md-center">
                    <div class="col-sm-3 p-4">
                     <img class="d-block w-100 featured-book-cover" src="{{asset('')}}img/book cover/placeholder1.jpg" alt="First slide">
                    </div>
                    <div class="col-sm-6 relative">
                        <div class="featured-content-holder">
                            
                        <h3 class="text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, repudiandae quam asperiores vel numquam id dolor eos aliquid libero adipisci, soluta magnam nemo expedita voluptatibus dolorum animi velit minus distinctio?
                        </h3>
                        </div>
                    </div>
                </div>
             </div>
            <!--/Third slide-->
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis unde facere reprehenderit odit harum aliquid cumque voluptatem omnis ea similique facilis nam, sit, praesentium repellendus doloremque aliquam deleniti illo error.</p>
                        <a href="#" class="btn rounded-10 bg-maroon text-white">Start Reading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trending-stories">
        <div class="container">
            <h1>Featured Stories</h1>
            <div class="story-list mt-5  pt-5">
                <div class="row bg-lightpink py-5 justify-content-lg-center mt-3">
                    <div class="col-sm-3">
                        <img class="d-block w-100 stories-book-cover p-10" src="{{asset('')}}img/book cover/placeholder1.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <div class="stories-caption px-3">
                            <h1 class="title">Tipsy in Jeju</h1>
                            <h6 class="genre">Romance</h6>
                            <div class="ratings">
                                <div id="full-stars-example">
                                    <div class="rating-group">
                                        <input class="rating__input rating__input--none" name="rating" id="rating-none" value="0" type="radio">
                                        <label aria-label="No rating" class="rating__label" for="rating-none"><i class="rating__icon rating__icon--none fa fa-ban"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
                                        <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" checked>
                                        <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
                                        <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                                        <label class="rating__label" for="">5</label>
                                    </div>
                                  
                                </div>
                                
                            </div>
                            <div class="data">
                                <h5><i class="fas fa-eye"></i> 5.1M</h5>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio, ipsam et quos cum aut odit atque quis, voluptatem modi ad possimus nisi maxime, illo nulla fugit excepturi incidunt quod.</p>
                            <a href="#" class="btn rounded-10 bg-maroon text-white">Start Reading</a>
                        </div>
                    </div>
                </div>
                <div class="row bg-lightpink py-5 justify-content-lg-center mt-3">
                    <div class="col-sm-3">
                        <img class="d-block w-100 stories-book-cover p-10" src="{{asset('')}}img/book cover/placeholder1.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <div class="stories-caption px-3">
                            <h1 class="title">Tipsy in Jeju</h1>
                            <h6 class="genre">Romance</h6>
                            <div class="ratings">
                                <div id="full-stars-example">
                                    <div class="rating-group">
                                        <input class="rating__input rating__input--none" name="rating" id="rating-none" value="0" type="radio">
                                        <label aria-label="No rating" class="rating__label" for="rating-none"><i class="rating__icon rating__icon--none fa fa-ban"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
                                        <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" checked>
                                        <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
                                        <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                                        <label class="rating__label" for="">5</label>
                                    </div>
                                  
                                </div>
                                
                            </div>
                            <div class="data">
                                <h5><i class="fas fa-eye"></i> 5.1M</h5>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio, ipsam et quos cum aut odit atque quis, voluptatem modi ad possimus nisi maxime, illo nulla fugit excepturi incidunt quod.</p>
                            <a href="#" class="btn rounded-10 bg-maroon text-white">Start Reading</a>
                        </div>
                    </div>
                </div>
                <div class="row bg-lightpink py-5 justify-content-lg-center mt-3">
                    <div class="col-sm-3">
                        <img class="d-block w-100 stories-book-cover p-10" src="{{asset('')}}img/book cover/placeholder1.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <div class="stories-caption px-3">
                            <h1 class="title">Tipsy in Jeju</h1>
                            <h6 class="genre">Romance</h6>
                            <div class="ratings">
                                <div id="full-stars-example">
                                    <div class="rating-group">
                                        <input class="rating__input rating__input--none" name="rating" id="rating-none" value="0" type="radio">
                                        <label aria-label="No rating" class="rating__label" for="rating-none"><i class="rating__icon rating__icon--none fa fa-ban"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
                                        <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" checked>
                                        <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
                                        <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                                        <label class="rating__label" for="">5</label>
                                    </div>
                                  
                                </div>
                                
                            </div>
                            <div class="data">
                                <h5><i class="fas fa-eye"></i> 5.1M</h5>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio, ipsam et quos cum aut odit atque quis, voluptatem modi ad possimus nisi maxime, illo nulla fugit excepturi incidunt quod.</p>
                            <a href="#" class="btn rounded-10 bg-maroon text-white">Start Reading</a>
                        </div>
                    </div>
                </div>
                <div class="row bg-lightpink py-5 justify-content-lg-center mt-3">
                    <div class="col-sm-3">
                        <img class="d-block w-100 stories-book-cover p-10" src="{{asset('')}}img/book cover/placeholder1.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <div class="stories-caption px-3">
                            <h1 class="title">Tipsy in Jeju</h1>
                            <h6 class="genre">Romance</h6>
                            <div class="ratings">
                                <div id="full-stars-example">
                                    <div class="rating-group">
                                        <input class="rating__input rating__input--none" name="rating" id="rating-none" value="0" type="radio">
                                        <label aria-label="No rating" class="rating__label" for="rating-none"><i class="rating__icon rating__icon--none fa fa-ban"></i></label>
                                        <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
                                        <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" checked>
                                        <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
                                        <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                                        <label class="rating__label" for="">5</label>
                                    </div>
                                  
                                </div>
                                
                            </div>
                            <div class="data">
                                <h5><i class="fas fa-eye"></i> 5.1M</h5>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio, ipsam et quos cum aut odit atque quis, voluptatem modi ad possimus nisi maxime, illo nulla fugit excepturi incidunt quod.</p>
                            <a href="#" class="btn rounded-10 bg-maroon text-white">Start Reading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        



        <div class="slider-section p-5">
            <div class="row justify-content-md-center">
                <div class="col-sm-8">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                            alt="First slide">
                        </div>
                        <div class="item">
                            <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                            alt="First slide">
                        </div>
                        <div class="item">
                            <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                            alt="First slide">
                        </div>
                        <div class="item">
                            <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                            alt="First slide">
                        </div>
                        <div class="item">
                            <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                            alt="First slide">
                        </div>
                        <div class="item">
                            <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                            alt="First slide">
                        </div>
                        <div class="item">
                            <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                            alt="First slide">
                        </div>
                        <div class="item">
                            <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                            alt="First slide">
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    
    @section('scripts')
        <script src="{{asset('')}}plugins/owl/owlcarousel/owl.carousel.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
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
                        items:3
                    }
                }
            })
        </script>
    @endsection
</x-guest-layout>