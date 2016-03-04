<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"></meta>
<title>PHP Multiplication</title>
</head>

<body>


<?php
	echo "<p><b>EECS448 Multiplication Table</b></p>";
?>
<br>

<?php	
	$max_rows = 100;
	$max_columns =100;
	
	echo "<table border=\"3\">";

        for ($row =1; $row <= $max_rows; $row++)
		{

            echo'<tr>'; #start new table row to populate

            for ($col = 1; $col <= $max_columns; $col++)
			{
				#populate table data field with the mult
                echo '<td>' .$col*$row.'</td>';
			}
			
			echo '</tr>'; # close table row tag

        }

        echo"</table>";
	
	
?>

</body>
</html>