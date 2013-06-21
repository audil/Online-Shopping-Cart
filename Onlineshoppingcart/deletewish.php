<?php
// Grab User submitted information
// Connect to the database
include 'config.php'; 
  $productid = trim($_POST["productid"]);
    $customerid = trim($_POST["customerid"]);
// Select the database to use
    $myproductid = mysql_real_escape_string($productid);
    $mycustomerid = mysql_real_escape_string($customerid);
    mysqli_query($con,"DELETE FROM favoriteslist WHERE userid='$mycustomerid' and productid='$myproductid'");
    die('ok');     
    mysqli_close($con);
?>
     
        
        
