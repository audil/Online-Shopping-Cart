<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <link href="test.css" type="text/css" rel="stylesheet">
        <script src="jquery-1.9.1.js"></script>
        <script src="jquery.min.js"></script>
    </head>

    <body>
        <div class="header">
            <label id="search_label">Search:</label>
            <input id="search" type="text" name="search" placeholder="Search here">
            <a href="#"><img class="top" src="arrow.png"></a>
<?php
session_start();
if(isset($_SESSION['username'])){           
    echo '<label id="login">';
    echo ' <a href="logout.php">Logout</a>';
    echo '</label>';
}
 else {
    echo '<label id="login">';
    echo ' <a href="#">Login</a>';
    echo '</label>';
}
?>
                        <label id="about">
                <a href="#">About us</a>
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
        <?php
        include 'connection.php';
        ?>  
        <div class="content">
            <div id="loading"></div>
        </div>

        <div id="login_section">

            <form name="loginForm" action="" method="post">
                USER<input id="user_name" type="email"/><br><br>
                PASSWORD<input id="password" type="password"/>
                <button id="log_in">login</button>
               <div id="info"></div>
            </form>
       <button id="cancel">cancel</button>
        </div>
        <div id="footer">
            <h3>copyright-audil@qburst.com</h3>
        </div>
        <script src="test.js"></script>


    </body>
</html>
