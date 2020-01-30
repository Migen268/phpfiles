<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" >
<meta name="keywords" content="bla,bla,bla">
<meta name ="author" content="migen-derstila">

<title>Data Type</title>
</head>

<body>

<h3>Vlerat Origjinale</h3>

<?php

$a = "3.5 seconds";
$b=79.2;
$c = 12;
print("<p> $a is a(n) ".gettype($a)
."</p>");

print("<p> $b is a(n) ".gettype($b)
."</p>");

print("<p> $c is a(n) ".gettype($c)."</p>");

print  "<h3>Converting to other data types</h3>";

print("<p> $a as a double is:");
settype($a,"double");
print("$a</p>");

print("<p>$a as an integer is:");
settype($a,"integer");
print("$a</p>");
settype($a,"string");
print("<p>Convertng back to a string results in:$a");

$d="98.6 degrees";
print("<p>Before casting $d is a ".gettype($d)."</p>");
print("<p>Using type casting instead <br>as a double".(double)$d."<br> as an integer:".(integer)$d);
print("<p>After casting $d is a ".gettype($d)."</p>");
//end php script

?>

</body>
</html>