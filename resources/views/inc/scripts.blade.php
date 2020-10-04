 
 <!-- Bootstrap tooltips -->
 <script type="text/javascript" src="{{asset('')}}js/popper.min.js"></script>
 <!-- Bootstrap core JavaScript -->
 <script type="text/javascript" src="{{asset('')}}js/bootstrap.min.js"></script>
 <!-- MDB core JavaScript -->
 <script type="text/javascript" src="{{asset('')}}js/mdb.min.js"></script>
 {{-- Custom JS --}}
 <script type="text/javascript" src="{{asset('')}}js/main.js"></script>
 <!-- Your custom scripts (optional) -->\

 <script type="text/javascript">
    $(window).on('load', function() { // makes sure the whole site is loaded 
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(350).css({'overflow':'visible'});
    })
   </script> 