<?php
// Grab User submitted information
// Connect to the database
$con = mysqli_connect("localhost", "root", "root", "Online_shopping");
// Make sure we connected succesfully
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
} 
$username=$_SESSION['username'];
$result = mysqli_query($con,"SELECT id FROM userdetails WHERE username='$username'");
$row = mysqli_fetch_array($result);
$userid = $row['id'];
$check = mysqli_query($con,"SELECT products.id,products.Image,products.product_name,products.category,products.price FROM products INNER JOIN favoriteslist
ON products.id=favoriteslist.productid WHERE favoriteslist.userid='$userid '");
 
echo '<div style="margin-top:42px;">';
echo '<table>';
echo '<tr>';
while ($row = mysqli_fetch_array($check))
    {

    $productid=$row['id'];
    echo '<tr>';
    echo '<td>';
      echo '<div class= product_'.$productid.' style="width:136%; height:180px;border-top:1px solid #c89cc1;border-bottom:1px solid #c89cc1;">';
        echo '<img src="data:image/jpeg;base64,' .base64_encode($row['Image']) . '" width=175px height=100px />';
        echo "<div>" . $row['product_name'] . "</div>";
        echo "<div>" . $row['category'] . "</div>";
        echo"<div>";
        echo ('price:');
        echo($row['price']);
        echo '</div>';?>
        <label class="deletewish">
        <a href="#">Remove from wishlist</a>
        <input type="hidden" value=<?php echo $productid; ?> class='productid'>
        <input type="hidden" value=<?php echo $userid;?> class='customerid'>
        </label>
        </td>
        </tr>            
  <?php      
}
echo'</tr>';
echo'</table>';
echo'</div>';     
mysqli_close($con);
?> 
  
  <script src="data.js"></script>
  <script src="jquery-1.9.1.js"></script>
  <script src="jquery.min.js"></script>