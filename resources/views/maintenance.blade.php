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
                            <button type="button" class="btn btn-outline-white" data-toggle="modal" data-target="#basicExampleModal">Want to donate a coffee?<i class="fa fa-coffee ml-2"></i> Click here!</button>
                                
        
                        </div>

                    </div>

                </div>

            </div>

<!-- Modal -->
                                <div class="modal fade center" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Gcash Account Detail:</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Name: Sofia Haven<br>
                                        Number: 09999999999<br>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>


@include('inc.scripts')

