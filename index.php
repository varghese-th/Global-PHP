<?php include 'base.php';?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Global Technologies Utd.</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./css/vv.css">
    </head>
    
    <body>

        <!-- Container (About Section) -->
        
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h4>Global Technologies Utd: - two decades company having ample experience in Electronic security, Automation, Automobile, GPS Vehicle tracking. A single outlet, one stop destination, where you can find the wide range of Electronic security Products and solutions from the well known brands of the world.</h4><br>
                    <p>GTU: provides a high-end comprehensive suite of technology & business process outsourcing services. We believe in long term, sustainable relationship with our dealers, distributors and clients. Largest manufacturer/distributor in CCTV Cameras, DVR, cables and related accessories. Importer/Channel Partner of renowned automation (home, gate, light) companies.</p><br>
                    <button id="btnspl" class="btn btn-default btn-lg"><a style="text-decoration: none;" href="./enquiry-form.php">Get in Touch</a></button>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-signal logo"></span>
                </div>
            </div>
        </div>


        <!-- mission and vission -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-globe logo slideanim"></span>
                </div>
                <div class="col-sm-8">
                    <h2>Our Values</h2><br>
                    <h4><strong>MISSION:</strong> Build the best product, use business to inspire and implement solutions.</h4><br>
                    <p><strong>VISION:</strong> To be the company that best understands customer needs and satisfies them with our product and service.</p>
                </div>
            </div>
        </div>

        <!-- map -->

         <style>
            #map {
                height: 400px;
                width: 100%
            }
        </style>

        <div id="map"></div>
            <script>
                function initMap() {
                    var uluru = {lat: 9.968542, lng: 76.316741};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 18,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                    });
                }
                </script>
        
            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQriBAMNDceta2JO_GL67k7KGPYPojlV4&callback=initMap">
            </script>

            <script>
            $(document).ready(function(){
              // Add smooth scrolling to all links in navbar + footer link
              $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 900, function(){
               
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
              
              $(window).scroll(function() {
                $(".slideanim").each(function(){
                  var pos = $(this).offset().top;

                  var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                      $(this).addClass("slide");
                    }
                });
              });
            })
            </script>

    </body>
</html>
<?php include 'footer.php';?>