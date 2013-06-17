        <?php
        $con = mysqli_connect("localhost", "root", "root", "Online_shopping");

// Check connection

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $id = $_GET['id'];
        $sql = "select * from products where id=$id";

        $rsd = mysqli_query($con, $sql);
        echo '<div>';
        echo '<table id=datadefinition>';
        echo '<tr>';

        while ($row = mysqli_fetch_array($rsd)) {
            echo '<td>';
            echo '<div style="width:70%; height:235px;border-top:1px solid #c89cc1;border-bottom:1px solid #c89cc1;" id="divproducts">';
//        header('Content-type: image/jpg');
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" width=375px height=300px />';
            echo "<div>" . $row['product_name'] . "</div>";
            echo "<div>" . $row['category'] . "</div>";
            echo"<div>";
            echo ('price:');
            echo($row['price']);
            echo "<div>" . $row['description'] . "</div>";
            echo '</div>';
            echo '<td>';
        }
        echo '<div>';
        echo '</tr>';
        echo '</table>';

        mysqli_close($con);
        ?>
      