<html>
<head>
<title> Even Odd Program</title>
</head>
<body>
<form method="GET">
<p><b>Enter a number to check whether it is even or odd</b></p><br>
<input type="number" name="n"/><br>
<input type="submit" name="Submit"/>
</form>
<?php
if($_GET['Submit']) {
$number=$_GET['n'];
if($number==0 || $number<0)
{
 echo ' Enter a positive number ';
}
else
{   
if($number%2==0)
{
echo " $number is an even number.";
}
else
{
echo "$number is an odd number.";
}
}
}    
?>
</body>
</html>

