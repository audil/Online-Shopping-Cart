<?php

// Grab User submitted information
// Connect to the database
$con = mysqli_connect("localhost", "root", "root", "Online_shopping");
// Make sure we connected succesfully
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
} {
    $productid = trim($_POST["productid"]);
    $customerid = trim($_POST["customerid"]);
// Select the database to use
    $myproductid = mysql_real_escape_string($productid);
    $mycustomerid = mysql_real_escape_string($customerid);
    $result = mysqli_query($con,"SELECT id FROM userdetails WHERE username='$mycustomerid'");
    $row = mysqli_fetch_array($result);
    $userid = $row['id'];
   $check = mysqli_query($con,"SELECT * FROM favoriteslist WHERE userid='$userid'and productid='$myproductid'");
    $count=  mysqli_num_rows($check);// Mysql_num_row is counting table row
    if($count==1)
    {
        echo 'Cannot add,Already in your wish list';
    }  
 else {
   mysqli_query($con,"INSERT INTO favoriteslist (userid,productid) VALUES ($userid,$myproductid)");
    echo 'Added in wishlist';     
    }

    mysqli_close($con);
}
?>
