<div id="content">
    <table>
        <tr>
    <?php
    $count = 0;
    foreach ($product as $row):
        if ($count == 5) {
            echo '<tr>';
            $count = 0;
        } {
           $productId=$row['id'];
            echo '<td>';
            echo '<div id="productindividually">';
            echo '<a href="dataDescription?id=', $productId, '">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['Image']) . '" width=175px height=100px />';
            echo'</a>';
            echo "<div>" . $row['product_name'] . "</div>";
             echo "<div>" . $row['category'] . "</div>";
            echo"<div>";
            echo ('price:Rs.');
            echo($row['price']);
            echo '</div>';
            $count++;
        }
    endforeach
    
        ?>
        </tr>
    </table>
    <?php echo $this->pagination->create_links();?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	
</div>