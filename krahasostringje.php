<!DOCTYPE  html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="MIGEN">
<title>Sha boone</title>
</head>
<body>

<?php 
$fruta = ["apple","orange","banana"];

for($i=0;$i<count($fruta);$i++){
	if(strcmp($fruta[$i],"banana")<0)
		echo "<p>\"".$fruta[$i] ."\" eshte me e vogel se banana";// me \" afishon " 
	else if(strcmp($fruta[$i],"banana")>0)
		print ("<p>\"".$fruta[$i] ."\" eshte me e madhe se banana");
	else
		print "<p> \"".$fruta[$i]."\" eshte e barabarte me banana";
	
	//tn krahasojme duke perdorur operatoret relacionale
	if($fruta[$i]<"apple")
		echo " dhe me e vogel sesa apple</p>";
	else if($fruta[$i]>"apple")
		echo " dhe me e madhe sesa apple</p>";
	else
		echo " dhe e barabarte me apple</p>";
}
$a="analfabet";
if(preg_match("/^ANA/i",$a))//i per insensitive
	echo "e permban";
else
	echo "nuk e permban";
if(preg_match("/^ana/",$a))echo "<br>'ana' ndodhet ne fillim te '$a'";

if(preg_match("/bet$/",$a)) echo"<br>'bet' ndodhet ne fund te '$a'";
if(preg_match("/fa/",$a)) echo "<br> 'fa' ndodhet te '$a'";
if(preg_match("/Fa/i",$a)) echo "<br> insentive search :'Fa' ndodhet te '$a'";//insensitive Fa=fa a=A
	

$bi=preg_replace("/ana/","<span style = 'color:red'>Ana</span>",$a);	
echo "<br>$bi";
echo "<br>Stringa eshte :$a<br>";

$ac="Migen";
echo "Another string:$ac";
if(preg_match("/^Mig/",$ac))
	echo "<br>'Mig' ndodhet ne fillim te '$ac'";
$di = preg_replace("/g/","gj",$ac);
echo "<p>Mbas zevendesoj :$di</p>";
$ani =preg_replace("/en/","<span style='text-decoration:underline;'>en</span>","$ac");//arg e pare te stringa ne arg e 3 zv me arg e dyte
echo "vlera tjeter $ani";
echo "<br>por stringa ka vleren:$ac<br>";
echo "<h2>Zevendeso backslash me forwardslash";

//e rendesishme
$ela="D:\HTML5\bootstrap-4.3.1-dist\joshua.jpg";
echo "<h3>Ne fillim  kemi: <span style='color:red'>$ela</span></h3>";
$elaa=str_replace("\\", "/",$ela);// \ afshishohet me :\\,,nuk behete e preg_replace()
echo "<h3>Pas zevendesimit:<span style='color:green'>$elaa</span></h3>";



//kalimi me reference
function hiqpresje(&$string){//merr adresen e arg dhe modifikon vleren qe ruan ajo
	$string =str_replace(","," ",$string);//zv , me hapsire
}

$nr="100,000";
echo "<br>Vlera para thirrjes se funsionit:$nr";
hiqpresje($nr);
echo " <br>Mbas thirrrjes  se funksionit: $nr";

//kalim me vlere
function hiq($string){//merr adresen e arg dhe modifikon vleren qe ruan ajo
	 $string =preg_replace("/g/","gj","$string");
	 return $string;
}
$a="Migen";
echo "<br>Vlera para thirrjes se funsionit:$a";
echo " <br>Gjate thirrrjes  se funksionit: ".hiq($a);
echo " <br>Mbas thirrrjes  se funksionit: $a";

//another function
function setName($FirstName = "John", $LastName = "Neuman"){
return "<br>Hello, $FirstName $LastName !\n";
}
 echo " ".setName();
 echo "".setName("Klajdis","Preci");
  echo "".setName("Migen");
 echo "".setName("Migen","");

?>
</body>
</html>