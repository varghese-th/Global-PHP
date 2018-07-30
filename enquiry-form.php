<!DOCTYPE html>
<html>

    <?php include 'base.php';?>
    <link rel="stylesheet" href="./css/enquiry.css">

    <!-- enquiery form -->

    <div class="mmm">  
        <form id="contact" action="enquiry.php" method="post">
            <h3>Quick Contact</h3>
            <br>
            <fieldset>
                <input  name="Name" placeholder="Name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input  name="Mail" placeholder="Email" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input  name="Mob" placeholder="Mobile" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
                <textarea  name="Address" placeholder="Address" tabindex="5"></textarea>
            </fieldset>
            <fieldset>
                <textarea  name="Message" placeholder="Message / Enquiry" tabindex="5"></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
    <?php include 'footer.php';?>

</html>



