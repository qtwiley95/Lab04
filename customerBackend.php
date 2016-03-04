<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reciept</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

	$numRed = $_POST["red_beans"];
	$numBlue = $_POST["blue_beans"];
	$numRainbow = $_POST["rainbow_beans"];
	$typeShip = $_POST["ship"];

	$subRed = $numRed*32;
	$subBlue = $numBlue*13;
	$subRainbow = $numRainbow*42;
	$shipCost = 0;
	if($typeShip == "Three_Day")
	{
		$shipCost = 5;
	}
	else if($typeShip == "OverNight")
	{
		$shipCost = 50;
	}

	$totes = $shipCost + $subRed + $subBlue + $subRainbow;

	echo "UserName: " . $_POST["user_name"] . "<br />";
	echo "Password: " . $_POST["pass_word"] . "<br />";

	echo "<table border=\"2\" style=\"width:48%\"
		<tr>
			<td></td>
			<td>Quantity</td>
			<td>Cost Per Item</td>
			<td>Sub Total</td>
		</tr>
		<tr>
			<td>Red Beans</td>
			<td>$numRed</td>
			<td>$32.00</td>
			<td>$$subRed</td>
		</tr>
		<tr>
			<td>Blue Beans</td>
			<td>$numBlue</td>
			<td>$13.00</td>
			<td>$$subBlue</td>
		</tr>
		<tr>
			<td>Rainbow Beans</td>
			<td>$numRainbow</td>
			<td>$42.00</td>
			<td>$$subRainbow</td>
		</tr>
		<tr>
			<td>Shipping</td>
			<td colspan=\"2\">$typeShip</td>
			<td>$$shipCost</td>
		</tr>
		<tr>
			<td colspan=\"3\">Total Cost</td>
			<td><b>$$totes</b></td>
		</tr>
		</table>



	";
?>

</body>
</html>
