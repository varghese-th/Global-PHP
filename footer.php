<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="footer, address, phone, icons" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <!-- <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="./css/footer.css"> -->
    </head>

<style>
    
    .footer-distributed{
    background-color: #292c2f;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;

    padding: 55px 50px;
    margin-top: 5px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
    width: 40%;
}

/* The company logo */

.footer-distributed h3{
    color:  #ffffff;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
}

.footer-distributed h3 span{
    color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
    color:  #ffffff;
    margin: 20px 0 12px;
    padding: 0;
}

.footer-distributed .footer-links a{
    display:inline-block;
    line-height: 1.8;
    text-decoration: none;
    color:  inherit;
}

.footer-distributed .footer-company-name{
    color:  #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
    width: 35%;
}

.footer-distributed .footer-center i{
    background-color:  #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p{
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin:0;
}

.footer-distributed .footer-center p span{
    display:block;
    font-weight: normal;
    font-size:14px;
    line-height:2;
}

.footer-distributed .footer-center p a{
    color:  #5383d3;
    text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
    width: 20%;
}

.footer-distributed .footer-company-about{
    line-height: 20px;
    color:  #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span{
    display: block;
    color:  #ffffff;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons{
    margin-top: 25px;
}

.footer-distributed .footer-icons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color:  #33383b;
    border-radius: 2px;

    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;

    margin-right: 3px;
    margin-bottom: 5px;
}

.for-hexetra {
    height: 45px;
    width: 100%;
    background-color: #000;
    text-align: center;
}

.for-hexetra a {
    color: #FFF;
    line-height: 45px;
    font-size: 12px;
    text-decoration: none;
}

.for-hexetra strong {
    color: #FFF;
    line-height: 45px;
    font-size: 15px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

    .footer-distributed{
        font: bold 14px sans-serif;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right{
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }

    .footer-distributed .footer-center i{
        margin-left: 0;
    }

}

</style>


    <body>

        <!-- The content of your page would go here. -->

        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Global<span> Technologies</span></h3>

                <p class="footer-links">
                    <a href="./index.php">Home</a>
                    ·
                    <a href="./accessories.php">Products</a>
                    ·
                    <a href="./enquiry-form.php">Enquiry</a>
                    ·
                    <a href="./contact.php">Contact Us</a>
                </p>

                <!-- <p class="footer-company-name">Company Name &copy; 2015</p> -->
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Anchala Towers</span> Vytilla, Cochin</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+91 93492 92944</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a>business@globaltechnologiesutd.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span>
                    Global Technologies Utd: - two decades company having ample experience in Electronic security, Automation, Automobile, GPS Vehicle tracking. A single outlet, one stop destination, where you can find the wide range of Electronic security Products and solutions from the well known brands of the world.
                </p>

<!--                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div> -->

            </div>



        </footer>

        <div class="for-hexetra">
            <a>website powered by <strong>Hexetra</strong></a>
        </div>

    </body>

</html>