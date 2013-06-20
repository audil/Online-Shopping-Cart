<?php
$con=mysqli_connect("localhost","root","root","Online_shopping");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$search = trim($_POST["search"]);
$dropdown = trim($_POST["dropdown"]);
if($dropdown =="All CATEGORIES")
{
    $result = mysqli_query($con,"SELECT * FROM products WHERE product_name like '%$search%'");
}
else  
{
    $result = mysqli_query($con,"SELECT * FROM products INNER JOIN category
ON products.categoryid=category.id WHERE products.product_name like '%$search%' and category.id='$dropdown'");
}   
  while ($row = mysqli_fetch_array($result))
    {
         '<div id=searchresult>';
        echo '<tr>';
        echo '<td>';
        echo '<div style="width:136%; height:180px;border-top:1px solid #c89cc1;border-bottom:1px solid #c89cc1;" class="divproducts" value="<?php echo $productid; ?>">';
        echo '<img src="data:image/jpeg;base64,' .base64_encode($row['Image']) . '" width=175px height=100px />';
        echo "<div>" . $row['product_name'] . "</div>";
        echo "<div>" . $row['category'] . "</div>";
        echo"<div>";
        echo ('price:');
        echo($row['price']);
        echo '</div>';
        echo"</div>";
        echo "<div id=searchshow>" . $row['description'] . "</div>";
        echo '</td>';
        echo '</tr>';             
        echo '</div>';
         
    }
echo'</tr>';
echo'</table>';
echo'</div>';   
 
mysqli_close($con);

?>