<?php 
$con = mysqli_connect("localhost", "root", "root", "Online_shopping");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "select * from category";
$rsd = mysqli_query($con, $sql);
echo '<option>All CATEGORIES</option>';
while ($row = mysqli_fetch_array($rsd))  
{
$id=$row['id'];
    echo "<option value='$id'>" . $row['category'] . "</option>";
}
?>