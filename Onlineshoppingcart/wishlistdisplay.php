<?php
// Grab User submitted information
// Connect to the database
include 'config.php';
$username=$_SESSION['username'];
$result = mysqli_query($con,"SELECT id FROM userdetails WHERE username='$username'");
$row = mysqli_fetch_array($result);
$userid = $row['id'];
$check = mysqli_query($con,"SELECT products.id,products.Image,products.product_name,products.category,products.price FROM products INNER JOIN favoriteslist
ON products.id=favoriteslist.productid WHERE favoriteslist.userid='$userid '");
 $count = 0;
echo '<div style="margin-top:42px;  margin-left: 177px;">';
echo '<table>';
echo '<tr>';
while ($row = mysqli_fetch_array($check))
    {
if ($count == 4) {
        echo '<tr>';
        $count = 0;
}
    $productid=$row['id'];
    
    echo '<td>';
      echo '<div class= product_'.$productid.' style="width:115%; height:232px;border-bottom:1px solid #c89cc1;">';
      include 'function.inc';?>
        <label class="deletewish">
        <a href="#">Remove from wishlist</a>
        <input type="hidden" value=<?php echo $productid; ?> class='productid'>
        <input type="hidden" value=<?php echo $userid;?> class='customerid'>
        </label>
        </td>
    <?php 
    $count++;           
      
}
echo'</tr>';
echo'</table>';
echo'</div>';     
mysqli_close($con);
?> 
  
  <script src="data.js"></script>
  <script src="jquery-1.9.1.js"></script>
  <script src="jquery.min.js"></script>