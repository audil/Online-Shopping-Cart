<?php

include 'config.php';

$per_page = 15;

if ($_GET) {
    $page = $_GET['page'];
}
//get table contents
$start = ($page - 1) * $per_page;
$sql = "select * from products order by id limit $start,$per_page";
//echo $sql;
$output = mysqli_query($con,$sql);
$count = 0;
echo '<div id="productlist">';
echo '<table>';
echo '<tr>';
while ($row = mysqli_fetch_array($output)) {
    if ($count == 5) {
        echo '<tr>';
        $count = 0;
    } {
        
        echo '<td>';
        //echo '<div style="width:70%; height:235px;border-top:1px solid #c89cc1;border-bottom:1px solid #c89cc1;" id="divproducts">';
       echo '<div id="productindividually">';
        $id = $row['id'];
        header('Content-type: image/jpg');
        echo '<a href="description.php?id=',$id,'">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" width=175px height=100px />';
        echo '</a>';
        echo "<div>" . $row['product_name'] . "</div>";
        echo "<div>" . $row['category'] . "</div>";
        echo"<div>";
        echo ('price:Rs.');
        echo($row['price']);
        echo '</div>';
       echo '</div>';
        echo '<td>';
        $count++;
        
        }
}

echo '<div>';
echo '</tr>';
echo '</table>';
mysqli_close($con);
?> 	

<link href="test.css" type="text/css" rel="stylesheet">