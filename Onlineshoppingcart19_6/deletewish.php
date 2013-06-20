<?php
// Grab User submitted information
// Connect to the database
$con = mysqli_connect("localhost", "root", "root", "Online_shopping");
// Make sure we connected succesfully
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
} 
  $productid = trim($_POST["productid"]);
    $customerid = trim($_POST["customerid"]);
// Select the database to use
    $myproductid = mysql_real_escape_string($productid);
    $mycustomerid = mysql_real_escape_string($customerid);
    mysqli_query($con,"DELETE FROM favoriteslist WHERE userid='$mycustomerid' and productid='$myproductid'");
    die('ok');     
    mysqli_close($con);
?>
     
        
        
