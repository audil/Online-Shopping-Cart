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
<form action="" method="post">
<label id="search_label">Search:</label>
<input type="text" id="search">
  <select id="categorydropdown" class='categorydropdown'>
      <?php include 'dropdown.php'; ?>
        </select>

<input type="image" src="arrow.png" id="top" alt="Submit" >

</form>         
                
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
              <label id="Home">
                <a href="index.php">Home</a>
            </label>         
            <label id="about">
                <a href="#">About us</a>
            </label>
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
