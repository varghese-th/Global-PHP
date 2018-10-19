<?php include 'base.php';?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="accessories.js"></script> -->

<style>
    
/* SIDE NAVIGATION BAR */

.navvv {
  text-align: left;
  width: 234px;
  list-style: none;
  padding: 0px;
  position: absolute;
  top: 20%;
  left: 2%;
  -webkit-box-shadow: 5px 2px 7px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 5px 2px 7px rgba(0, 0, 0, 0.15);
  box-shadow: 5px 2px 7px rgba(0, 0, 0, 0.15);
}

.navvv > li {
  width:210px;
  background: #FFFFFF;
  display: inline-block;
  font-size: 14px;
  
  cursor: pointer;
  font-weight: bold;
  border-bottom: 1px solid #DCDCDC;
}

.navvv > li:hover {
  background: #E6E6E6;
  color: #1B75C4;
}

.navvv > li > a {
  display: block;
  text-decoration: none;
  color: #000;
  padding: 15px 15px 15px 15px;
}

.navvv > li:nth-child(-n+2){
  border-left: 4px solid #FFC50A;
}

.navvv > li:nth-child(-n+2):hover{
  border-left: 4px solid #cc9e08;
}

.navvv > li:nth-child(n+3){
  border-left: 4px solid #74BF44;
}

.navvv > li:nth-child(n+3):hover{
  border-left: 4px solid #5d9936;
}

.navvv > li:nth-child(n+5) {
  border-left: 4px solid #0097D1;
}

.navvv > li:nth-child(n+5):hover {
  border-left: 4px solid #0079a7;
}


/* ENQUIRY BUTTON */

.enquiry-box {
    height: 160px;
    width: 234px;
    background-color: #EAECEE;
    -webkit-box-shadow: 5px 2px 7px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 5px 2px 7px rgba(0, 0, 0, 0.15);
    box-shadow: 5px 2px 7px rgba(0, 0, 0, 0.15);
    border-radius: 5px;
    position: absolute;
    top: 60%;
    left: 2%;
}

.enquiry-button {
    margin: 0 20%;
}

.enquiry-box h3 {
    text-align: center;
}

.enquiry-button .animate
{
  transition: all 0.1s;
  -webkit-transition: all 0.1s;
}

.enquiry-button .action-button
{
  position: relative;
  padding: 10px 40px;
  margin: 0px 10px 10px 0px;
  float: left;
  border-radius: 10px;
  font-family: 'Pacifico', cursive;
  font-size: 25px;
  color: #FFF;
  text-decoration: none;  
}



.enquiry-button .red
{
  background-color: #E74C3C;
  border-bottom: 5px solid #BD3E31;
  text-shadow: 0px -2px #BD3E31;
}



.enquiry-button .action-button:active
{
  transform: translate(0px,5px);
  -webkit-transform: translate(0px,5px);
  border-bottom: 1px solid;
}


.product-distributed .product-left,
.product-distributed .product-right{
    display: inline-block;
    vertical-align: top;
}

.product-distributed .product-left{
    display: inline-block;
    width: 25%;
}

.product-distributed .product-right{
    width: 70%;
}

/* IMAGE SLIDER */

#sliderFrame, #sliderFrame div {
    box-sizing: content-box;
}
#sliderFrame 
{
    width:700px;
    margin:0 auto; center-aligned
}

#slider, #slider .sliderInner {
    width:700px;height:306px;/* Must be the same size as the slider images */
    border-radius:3px;
}

#slider {
    background-color:white;
    position:relative;
    margin:0 auto; /* center-aligned */
    transform: translate3d(0,0,0);
    box-shadow: 0px 1px 5px #999999;
}

/* the link style (if an image is wrapped by a link) */
#slider a.imgLink, #slider .video {
    z-index:2;
    cursor:pointer;
    position:absolute;
    top:0px;left:0px;border:0;padding:0;margin:0;
    width:100%;height:100%;
}
#slider .video {
    background:transparent url(video.png) no-repeat 50% 50%;
}

/* Caption styles */
#slider .mc-caption {
    position:absolute;
    width:100%;
    height:auto;
    padding:10px 0;/* 10px will increase the height.*/
    left:0px;
    bottom:0px;top:auto;
    overflow:hidden;
    font: bold 14px/20px Arial;
    color:#EEE;
    text-align:center;
    background:rgba(0,0,0,0.3);
}
#slider .mc-caption a {
    color:#FB0;
}
#slider .mc-caption a:hover {
    color:#DA0;
}


/* ------ built-in navigation bullets wrapper ------*/
#slider .navBulletsWrapper  {
    top:320px;
    text-align:center;
    background:none;
    position:relative;
    z-index:3;
}

/* each bullet */
#slider .navBulletsWrapper div 
{
    width:11px; height:11px;
    font-size:0;color:White;/*hide the index number in the bullet element*/
    background:transparent url(bullet.png) no-repeat 0 0;
    display:inline-block; *display:inline; zoom:1;
    overflow:hidden;cursor:pointer;
    margin:0 6px;/* set distance between each bullet*/
}

#slider .navBulletsWrapper .active {background-position:0 -11px;}


/* --------- Others ------- */

#slider img, #slider>b, #slider a>b {
    position:absolute; border:none; display:none;
}

#slider .sliderInner {
    overflow:hidden;
    position:absolute; top:0; left:0;
}

#slider>a, #slider video, #slider audio {display:none;}
#slider div {-webkit-transform: translate3d(0,0,0);transform: translate3d(0,0,0);}

/* PRODUCTS DETAILS */

.products-details {
    margin: 5% 0;
}

/* IMAGES IN PRODUCTS DETAILS */

div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 170px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

.pclass {
    float: left;
}


@media screen and (max-width: 600px) {
    
    .product-distributed .product-left{
        display: none;
    }

    .product-distributed .product-right{
        width: 100%;
    }

    .formobiletext {
    	margin: 2% 5%;
    }

    #sliderFrame {
    	display: none;
    }
}

</style>


</head>
<body>

    <div class="product-distributed">
     
        <div class="product-left">
            
            <!-- side navigation bar -->

            <ul class="navvv">
                <li><a href="./accessories.php">CCTV Accessories</a></li>
                <li><a href="./gps.php">Vehicle tracking system</a></li>
<!--                 <li><a href="">CCTV Accessories</a></li>
                <li><a href="">CCTV Accessories</a></li>
                <li><a href="">CCTV Accessories</a></li> -->
            </ul>

            <div class="enquiry-box">
                <br>
                <h3>Have queries...?</h3>
                <div class="enquiry-button">
                    <a href="./enquiry-form.php" class="action-button shadow animate red">Click</a>    
                </div>
            </div>        
        </div>

        <div class="product-right">

            <!-- IMAGE SLIDER -->
            <br>
            <span style="font-weight:bold;"><h2 class="formobiletext">GPS - Vehicle Tracking System</h2></span>
            <br>


            <div class="container-fluid">  
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="./media/gps3.jpg" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="./media/gps1.jpg" style="width:100%;">
                  </div>
                
                  <div class="item">
                    <img src="./media/gps2.png" style="width:100%;">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div> 

            <div class="products-details">
                <div class="pclass">
                    <img src="media/indianautocompany.jpg">
                    <br>
                    <div class="gallery"> 
                        <img src="media/IAC_101.jpg" width="300" height="200">  
                    </div>
                    <div class="gallery">
                        <img src="media/IAC_102.jpg" width="600" height="400">  
                    </div>
                    <div class="gallery">
                        <img src="media/IAC_103.jpg" width="300" height="200">  
                    </div>
                    <div class="gallery"> 
                        <img src="media/IAC_140.jpg" width="600" height="400">  
                    </div>
                    <div class="pclass">
                        <p class="formobiletext">Indian Auto Company is a tech start-up in Telematics and Advanced Driver Assistance System offering solution in Tracking & Telematics, Navitainment, Rear Seat Infotainment and Driver Fatigue Systems. We use IoT hardware to deliver useful, real-time information's.</p>
                        <strong class="formobiletext">Features :</strong>
                        <br>
                        <ul class="formobiletext">
                            <li>&nbspBetter fleet Management</li>
                            <li>&nbspIncrease Fleet Safety</li>
                            <li>&nbspVehicle Tracking in Case of theft</li>
                            <li>&nbspRoute & Resource Optimization</li>
                            <li>&nbspCost Control</li>
                            <li>&nbspBetter Supply Chain Management</li>
                            <li>&nbspDriver Behaviour Systems</li>
                        </ul>
                    </div>
                </div>
            </div>

         </div>
    </div>

</body>
</html>
<?php include 'footer.php';?>