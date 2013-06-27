<div id="content">
    <?php
    foreach ($product as $row): {

           echo'<div id="divproducts">'; 
            echo '<div>';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" width=275px height=200px />';
            echo '</div>';
            echo '<div>' . $row['product_name'] . '</div>';
            echo "<div id=description>";
                            $sanitized = htmlspecialchars($row['description'], ENT_QUOTES);
                            echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $sanitized);
                            echo"</div>";
            echo'<div>';
            echo ('price:Rs.');
            echo($row['price']);
            echo '</div>';
            echo '</div>';
            
    }
    endforeach
    ?>

</div>