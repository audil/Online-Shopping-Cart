<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
        <link href="test.css" type="text/css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src=http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
     
<body>
        <div class="header">
            <form action="" method="post">
<label id="search_label">Search:</label>
<input type="text" id="search">
  <input type="image" src="arrow.png" id="top" alt="Submit" >
  
            </form>  
            <label id="login">
                <a href="logout.php">Logout</a>
            </label>
            <label id="about">
                <a href="#">About us</a>
            </label>
            <label id="Home">
                <a href="index.php">Home</a>
            </label>
             
        </div>
                  
          
    <div class="content">
        <?php include 'wishlistdisplay.php';?>
    </div>   
       <div class="wishlist">
           <label id="wish">Your Wishlist Goes Here</label>
          
       </div>  
    <div id="footer">
            <h3>copyright-audil@qburst.com</h3>
        </div>  
</body>
</html>
