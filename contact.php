<?php include 'base.php';?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>


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
