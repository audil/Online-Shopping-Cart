<?php
// Grab User submitted information

 if(empty($_POST['name']))  {
       echo 'Error: Please enter your email id';
} 
else if (empty($_POST['password']))
{
     echo 'Error:Please enter your password';
}
else 
 {

// Connect to the database
$con = mysqli_connect("localhost","root","root","Online_shopping");
// Make sure we connected succesfully
if (mysqli_connect_errno())
  {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
  }
$email = trim($_POST["name"]);
$pass = trim($_POST["password"]);
// Select the database to use
$myusername = mysql_real_escape_string($email);
$mypassword = mysql_real_escape_string($pass);
$result= "SELECT username,password FROM userdetails WHERE username='$myusername'and password='$mypassword'";
$rsd = mysqli_query($con,$result);
// Mysql_num_row is counting table row
$count=  mysqli_num_rows($rsd);
//echo $count.'count'; 
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
session_start();
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username'] = $myusername;
// Jump to secured page
die('successfully LoggedIN');
}
else {
// Jump to login page
        echo 'Incorrect Details Provided';
}
mysqli_close($con);
}
?>
