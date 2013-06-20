<?php
$con = mysqli_connect("localhost", "root", "root", "Online_shopping");

// Check connection

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
$sql = "select * from products where id=$id";
$rsd = mysqli_query($con, $sql);
?>
<div>
    <table id=datadefinition>
        <tr>
            <?php 
            while ($row = mysqli_fetch_array($rsd)){
                ?>
                <td>
                    <div id="divproducts">       
                        <div id=image>
                            <?php
                            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" width=375px height=300px />';
                            echo '</div>';
                            echo "<div id=productname>" . $row['product_name'] . "</div>";
                            echo "<div id=category>" . $row['category'] . "</div>";
                            echo"<div id=price>";
                            echo ('price:');
                            echo($row['price']);
                            echo"</div>";
                            echo "<div id=description>" . $row['description'] . "</div>";
                            ?>
                        </div>
                        <td>
                            <?php
                            session_start();
                            if (isset($_SESSION['username'])) {
                                echo '<label id="wish_list">';
                                echo ' <a href=" ">Add to wish list</a>';
                                echo '</label>';
                                echo '<label id="wish_list1">';
                                echo '</label>';
                            }
                        }
                        echo '<div>';
                        echo '</tr>';
                        echo '</table>';
                        mysqli_close($con);
                        ?>
                        <link href="test.css" type="text/css" rel="stylesheet">
                        <script src="jquery-1.9.1.js"></script>
                        <script src="jquery.min.js"></script>
                        <script src="data.js"></script>
                        <input type="hidden" value=<?php echo $_GET['id']; ?> id='productid'>
                        <input type="hidden" value=<?php echo $_SESSION['username']?> id='customerid'>