<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="./css/base.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    
    

/* NAVIGATON BAR */
        
.navbar {
    -webkit-box-shadow: 0 8px 6px -6px #999;
    -moz-box-shadow: 0 8px 6px -6px #999;
    box-shadow: 0 8px 6px -6px #999;

}

#nava-hehe {
    margin: 10px 10px;
    font-size: 30px;
    font-weight: 1000;
}

#nava{
    margin: 10px 10px;
    font-size: 18px;
}

#nava:hover {
    color: #E5050F;
}

#buttonnav {
    margin: 21px 10px;
    color: #FFF;
    text-align: center;
    border-radius: 100px;
    padding: 5px 30px;
    background-color: #E5050F;
}

#buttonnav:hover {
    background-color: #000;
}

@media screen and (max-width: 767px) {
    #buttonnav {
    text-align: center;
    border-radius: 100px;
    padding: 5px 30px;
    width: 36%;
    margin-left: 5%;
    }
}


/* BACK TO TOP */

#back2Top {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;
    right: 10px;
    background-color: #000;
    color: #FFF;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
}
#back2Top:hover {
    background-color: #E5050F;
    color: #FFF;
}






.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(./media/pageloader.gif) center no-repeat #fff;
}




</style>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>

</head>
<body>

    <div class="se-pre-con"></div>

    <!-- NAVIGATION BAR -->

    <nav id="navbar" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a id="nava-hehe" class="navbar-brand" href="./index.php">Global</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a id="nava" href="./index.php">Home</a></li>
                     <li class="dropdown">
                        <a id="nava" class="dropdown-toggle" data-toggle="dropdown" href="">Products<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./accessories.php">CCTV Accessories</a></li>
                            <li><a href="./gps.php">Vehicle Tracking System</a></li>
<!--                            <li><a href="">Web Application Development</a></li>
                            <li><a href="">User Experiance Design</a></li> -->
                        </ul>
                    </li>
                    <li><a id="nava" href="./enquiry-form.php">Enquiry</a></li>
                    <li><a id="buttonnav" href="./contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <a id="back2Top" title="Back to top" href="#">&#10148;</a>


    <script>
        /*Scroll to top when arrow up clicked BEGIN*/
        $(window).scroll(function() {
            var height = $(window).scrollTop();
            if (height > 100) {
                $('#back2Top').fadeIn();
            } else {
                $('#back2Top').fadeOut();
            }
        });
        $(document).ready(function() {
            $("#back2Top").click(function(event) {
                event.preventDefault();
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });

        });
         /*Scroll to top when arrow up clicked END*/
    </script>



</body>
</html>
