<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Migen</title>
</head>

<body>

<?php 

$a = 5;
print("<p> The value of variable a is:$a</p>");
define("alfa",10);//krijhet konstantja alfa me vlere 10
$a = $a + alfa;
print("<p>Vlerea e a pasi shtojme ". alfa ." eshte:$a</p>");
$a *= 2;
print("<p>Pasi shmezojme a me 2 vlera e  a:$a</p>");

if($a<50)
	print("<p>$a eshte me e vogel se 50</p>");

$a += 72;
print("<p>Vlera e a mbasi shtojme 72 eshte : $a </p>");

if($a<51)
	print("$a eshte me e vogel se 51");
else if($a<101)
		print("$a me e madhe ose e barabate me 51 dhe me e vogel se 101");
	else
			print("$a eshte me e madhe ose e barabarte me 101");


print("<p>Vlera e nje variable pa e inicializuar :$haha</p>");
$prove = $numi + alfa;
print("<p>Vlera e nje variable te pa inicializuar + alfa: $prove <br> pra variabla e painicializuar merr vleren 0</p>");
$b = "5 dollar";
$a += $b;
print("<p>Vlera e nje variabli (a) pasi i shtojme stringen '$b' eshte:$a</p>");

?>
</body>
</html>

