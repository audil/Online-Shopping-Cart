<?php
include 'config.php';
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
$count=  mysqli_num_rows($result);
if($count==0)    
    {
        echo 'No Results Found'; 
    }
 else 
     {
while ($row = mysqli_fetch_array($result))
    {
          echo'<div id=searchresult>';
        echo '<tr>';
        echo '<td>';
        echo '<div style="width:136%; height:167px;border-top:1px solid #c89cc1;border-bottom:1px solid #c89cc1;" class="divproducts" value="<?php echo $productid; ?>">';
        include 'function.inc';
        echo "<div id=searchshow>" . $row['description'] . "</div>";
        echo '</td>';
        echo '</tr>';             
        echo '</div>';
        
        
    }   
         }
   
 
mysqli_close($con);

?>