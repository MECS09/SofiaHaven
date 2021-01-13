<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script data-ad-client="ca-pub-6552033496045240" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    @include('inc.header')

    <style>

        body,html{
            height:100%;
        }
        
        #intro {
            background: url("{{asset('')}}img/maintenance-background.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        
        
          /* Add the blur effect */
          filter: blur(8px);
          -webkit-filter: blur(8px);
        
          /* Full height */
          height: 100%;
        
            
        }
        .sample{
            z-index:2;
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }
        </style>
</head>
<body>
    <!--Mask-->
    <div id="intro" class="view">
    </div>
        <div class="mask rgba-black-strong sample">

            <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                <div class="row d-flex justify-content-center text-center">

                    <div class="col-md-10 ">

                        <!-- Heading -->
                        
                        <img class="img-responsive"  src="{{asset('img/logo/Sofia-Pink_logo.png')}}" alt="Sofia haven Logo">
                        <!-- Divider -->
                        <hr class="hr-light">

                        <!-- Description -->
                        <h4 class="white-text my-4">Please be informed that SofiaHaven Website is under maintenance.</h4>
                        <button type="button" class="btn btn-outline-white" data-toggle="modal" data-target="#basicExampleModal">Inspire our writers more! Buy us Milktea! We appriciate your support.<i class="fa fa-coffee ml-2"></i> Click here!</button>
                            
    
                    </div>

                </div>

            </div>

        </div>

<!-- Modal -->
                    <div class="modal fade center" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Gcash Account Detail:</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Name: Jernalie Dumapay<br>
                                    Number: (+63) 9179494680<br>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>


                            
    <div
    class="modal fade"
    id="advertisement"
    tabindex="-1"
    aria-labelledby="advertisementLabel"
    aria-hidden="true"
    >
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="advertisementLabel">Join Us!</h5>
            
        </div>
        <div class="modal-body">
            <h5>Join me on Tiktok, Dreame, and PKS Phones. Win books of your choice, Gcash, Cellphone Load, and Stallion Gift Pack.</h5>
            <img class="img-responsive" src="{{asset('img/advertisement/sofia_ads.jpg')}}" alt="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Dismis
            </button>
            <a type="button" class="btn btn-primary bg-maroon" target="_blank" href="https://www.facebook.com/SofiaPHRPage/posts/3590293964351365">
                Read More
            </a>
        </div>
        </div>
    </div>
    </div>

                        @include('inc.scripts')
                        
        <script type="text/javascript">
            $(window).on('load',function(){
                $('#advertisement').modal('show');
            });
        </script>

</body>
</html>


        

