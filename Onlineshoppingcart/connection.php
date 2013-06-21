<?php
include 'config.php';
$per_page = 15; 

//getting number of rows and calculating no of pages
$result = mysqli_query($con,"SELECT * FROM products");
$count = mysqli_num_rows($result);
$pages = ceil($count/$per_page);
mysqli_close($con);
?> 
<table width="800px" id="display_table">
	<tr><Td>
			<ul id="pagination">
				<?php
				//Show page links
				for($i=1; $i<=$pages; $i++)
				{
					echo '<li id="'.$i.'">'.$i.'</li>';
				}
				?>
	</ul>	
	</Td></tr></table>
