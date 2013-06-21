<?php 
include 'config.php';
$sql = "select * from category";
$rsd = mysqli_query($con, $sql);
echo '<option>All CATEGORIES</option>';
while ($row = mysqli_fetch_array($rsd))  
{
$id=$row['id'];
    echo "<option value='$id'>" . $row['category'] . "</option>";
}
?>