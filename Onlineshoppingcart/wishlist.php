<?php
include'config.php';
 {
   
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
    $limit = mysqli_query($con,"SELECT * FROM favoriteslist WHERE userid='$userid'");
    $limitcount=  mysqli_num_rows($limit);
        if($count==1)
    {
        echo 'Cannot add,Already in your wish list';
    }  
    elseif ($limitcount==8){
    echo 'Cannot add,Exceed wish list limit';
}
    else {
   mysqli_query($con,"INSERT INTO favoriteslist (userid,productid) VALUES ($userid,$myproductid)");
    echo 'Added in wishlist';     
   }
    mysqli_close($con);
}

?>
