<?php

$con = mysqli_connect('globaltechnologiesutd.com', 'globalte_Global', 'global@123');

if (!$con) {
    echo 'Not Connected To Server';
}

if (!mysqli_select_db($con,'globalte_Enquiry'))
{
    echo 'Database Not Selected';
}

$Name = $_POST['Name'];
$Mail = $_POST['Mail'];
$Mob = $_POST['Mob'];
$Address = $_POST['Address'];
$Message = $_POST['Message'];

$sql = "INSERT INTO Enquirys(Name,Mail,Mob,Address,Message) VALUES ('$Name','$Mail','$Mob','$Address','$Message')";

if (!mysqli_query($con,$sql))
{
    echo 'Not Inserted';
}
else
{
    header("refresh:1; url=enquiry-form.php");
}

?>