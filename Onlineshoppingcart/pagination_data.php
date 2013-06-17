<?php

$con = mysqli_connect("localhost", "root", "root", "Online_shopping");

// Check connection
//print_r(mysqli_connect_errno());
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$per_page = 10;

if ($_GET) {
    $page = $_GET['page'];
}
//get table contents
$start = ($page - 1) * $per_page;
$sql = "select * from products order by id limit $start,$per_page";
//echo $sql;
$rsd = mysqli_query($con, $sql);
$count = 0;
echo '<div>';
echo '<table>';
echo '<tr>';
while ($row = mysqli_fetch_array($rsd)) {
    if ($count == 3) {
        echo '<tr>';
        $count = 0;
    } {
        echo '<td>';
        //echo '<div style="width:70%; height:235px;border-top:1px solid #c89cc1;border-bottom:1px solid #c89cc1;" id="divproducts">';
       $id = $row['id'];
        header('Content-type: image/jpg');
        echo '<a href="description.php?id=',$id,'">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" width=175px height=100px />';
        echo '</a>';
        echo "<div>" . $row['product_name'] . "</div>";
        echo "<div>" . $row['category'] . "</div>";
        echo"<div>";
        echo ('price:');
        echo($row['price']);
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

