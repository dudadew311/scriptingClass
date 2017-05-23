<!DOCTYPE html>
<html>
<body>

<?php
$candy = array("Gummy Bears", "Chocolate Bar", "Lollipop", "Twizzler");
$price = array(3.55, 2.11, 0.67, 2.45);
$itemPurchased = array(2, 0, 1, 1, 3, 0, 3);

function writeWelcome(){
	echo "<h3><center>Welcome to: <br/>";
	echo "CandyMart</center></h3>";
	echo "<hr>";
}

$subtotal = 0;

writeWelcome();
for($i = 0; $i < count($itemPurchased); $i++){
	$subtotal += $price[$itemPurchased[$i]];
	echo ($i+1) . ")   " . $candy[$itemPurchased[$i]] . "   \$" . $price[$itemPurchased[$i]];
	echo "<br/>";
}
echo "<hr>";

echo "Subtotal: \$" . $subtotal . "<br/>";
$tax = round(($subtotal * .07), 2);
echo "Tax: \$" . $tax . "<br/>";
echo "<strong>Total: \$" . ($subtotal + $tax) . "</strong><br/>";

?>

</body>
</html>