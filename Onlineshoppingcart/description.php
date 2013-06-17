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
            <label id="search_label">Search:</label>
            <input id="search" type="text" name="search" placeholder="Search here">
            <a href="#"><img class="top" src="arrow.png"></a>
            <?php
            
                if (isset($_SESSION['username'])) {
                echo '<label id="login">';
                echo ' <a href="logout.php">Logout</a>';
                echo '</label>';
            } else {
                echo '<label id="login">';
                echo ' <a href="#">Login</a>';
                echo '</label>';
            }
            ?>
            <label id="about">
                <a href="#">About us</a>
            </label>
            <label id="Home">
                <a href="index.php">Home</a>
            </label>

        </div>
        <div class="category">
            <div id="inner_category">ALL CATEGORIES</div>
            <ul class="categories">
                <li id="first_option"><a href ="#">CASUAL SHOES</a></li>
                <br>
                <li id="second_option">
                    <a href="#">SPORTS SHOES</a>
                </li>
                <br>
                <li id="third_option">
                    <a href="#">FORMAL SHOES</a>
                </li>
                <br>
                <li id="fourth_option">
                    <a href="#">SLIPPERS AND FLIP FLOPS</a>
                </li>
                <br>
                <li id="fifth_option">
                    <a href="#">SANDALS AND FLOATERS</a>
                </li>
                <br>
            </ul>
        </div>

        <div class="content">
            <?php 
            include 'datadescription.php'; ?>
        </div>  

        <div id="footer">
            <h3>copyright-audil@qburst.com</h3>
        </div>  
<!--        <script src="data.js"></script>-->
    </body>
</html>
