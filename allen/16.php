<html>
<head>
<title> Factorial Program</title>
</head>
<body>
<form method="POST">
<label>Enter a number</label>
<input type="number" name="number" required/><br>
<input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST['submit'] == "Submit") {
$n = $_POST['number'];
$fact=1;
for($i=$n; $i>=1;$i--) {
$fact = $fact * $i;
}
echo 'The factorial of the number '.$n.' is ' . $fact;
}
?>
</body>
</html>
