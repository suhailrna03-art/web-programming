<html>
<head>
<title>Electricity bill</title>
</head>
<body>
<center>
<h2>Electricity Bill</h2>
<form name="form" action="" method="POST">
<label>Enter Your Name: </label><br>
<input type="text" name="name"><br><br>
<label>How Much Units are used</label><br>
<input type="number" name="unit" min="0"><br>
<input type="submit" value="submit">
</form>
</center>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name = trim($_POST["name"] ?? "");
$units = $_POST["unit"] ?? "";

if($name == "")
{
echo "<script>alert('please enter your name correctly')</script>";
}
else if($units === "" || $units < 0)
{
echo "<script>alert('units must be required')</script>";
}
else{
$units = (int)$units;
$rate1 = 0.50;
$rate2 = 1;
$rate3 = 1.5;

// Correct Slab Calculation
if($units <= 100){
$bill = $units * $rate1;
}
else if($units <= 300){
$bill = (100 * $rate1) + (($units - 100) * $rate2);
}
else{
$bill = (100 * $rate1) + (200 * $rate2) + (($units - 300) * $rate3);
}
echo "<center>";
echo "Name: " . htmlspecialchars($name) . "<br>";
echo "Electricity bill: $bill";
echo "</center>";
}
}
?>
</body>
</html>