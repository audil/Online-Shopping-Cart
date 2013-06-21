<?php
include 'config.php';
$id = $_GET['id'];
$sql = "select * from products where id=$id";
$output = mysqli_query($con, $sql);
?>
<div>
    <table id=datadefinition>
        <tr>
            <?php
            while ($row = mysqli_fetch_array($output)) {
                ?>
                <td>
                    <div id="divproducts">       
                        <div class="images">
                            <?php
                            include 'function.inc';
                            echo "<div id=description>";
                            $sanitized = htmlspecialchars($row['description'], ENT_QUOTES);
                          echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $sanitized);
                           echo"</div>";
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
                        <input type="hidden" value=<?php echo $_SESSION['username'] ?> id='customerid'>