
<x-guest-layout>
    @section('styles')
        <link rel="stylesheet" href="{{asset('')}}plugins/owl/owlcarousel/assets/owl.carousel.css">
    @endsection

    <div class="container-fluid">
        <div class="owl-carousel owl-theme">
            <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                alt="First slide"></div>
            <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
                alt="Second slide"></div>
            <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                alt="Third slide"></div>
                <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                    alt="First slide"></div>
                <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
                    alt="Second slide"></div>
                <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                    alt="Third slide"></div>
                    <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                        alt="First slide"></div>
                    <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
                        alt="Second slide"></div>
                    <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                        alt="Third slide"></div>
                        <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                            alt="First slide"></div>
                        <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
                            alt="Second slide"></div>
                        <div class="item"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                            alt="Third slide"></div>
        </div>
    </div>
    
    
    @section('scripts')
        <script src="{{asset('')}}plugins/owl/owlcarousel/owl.carousel.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
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