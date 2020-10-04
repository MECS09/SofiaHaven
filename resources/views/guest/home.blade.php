
<x-guest-layout>
    @section('styles')
        <link rel="stylesheet" href="{{asset('')}}plugins/owl/owlcarousel/assets/owl.carousel.css">
    @endsection

    <div class="container-fluid">
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
                       <div class="col-sm-3">
                        <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                        alt="First slide">
                       </div>
                       <div class="col-sm-6">
                           <h3 class="text-center">
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, rerum? Doloremque voluptates quisquam amet quo veritatis fugiat architecto repellat. Pariatur assumenda ex temporibus saepe ea, illo placeat! Quaerat, obcaecati odio.
                           </h3>
                       </div>
                   </div>
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-3">
                         <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                         alt="First slide">
                        </div>
                        <div class="col-sm-6">
                            <h3 class="text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi natus incidunt, molestias impedit officiis quis dolorem reprehenderit amet exercitationem, delectus rerum non. Ipsum ullam veritatis, nobis cupiditate minima recusandae.
                            </h3>
                        </div>
                    </div>
                 </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-3">
                         <img class="d-block w-100" src="{{asset('')}}img/book cover/placeholder1.jpg"
                         alt="First slide">
                        </div>
                        <div class="col-sm-6">
                            <h3 class="text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, repudiandae quam asperiores vel numquam id dolor eos aliquid libero adipisci, soluta magnam nemo expedita voluptatibus dolorum animi velit minus distinctio?
                            </h3>
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