   <?php
$con = mysqli_connect("localhost", "root", "root", "Online_shopping");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "select * from category";
$rsd = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($rsd))
    {
    $categoryId = $row['id'];
    $categoryName = $row['category'];
    echo '<li><a href="#">' . $categoryName. '</a></li>';?>
       
         
<?php
      }
    mysqli_close($con);   
?>    
       