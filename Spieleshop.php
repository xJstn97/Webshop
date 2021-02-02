<html>
<head> <title> Startseite </title>

<link type = "text/css" href="design.css" rel="stylesheet">


<head>
<body background="Gray.jpg">
</body>
<ul>
<li style="float:right"><a class="active" href="Benutzerlogin.php">Registrierung</a></li>
<li style="float:right"><a class="active" href="Angaben.php">Angaben</a></li>
</ul>
<center> <font color="white"> <font size=7> Willkommen bei GameKey </font> </center>
</head>



<body>
<?php 
$link=mysqli_connect("localhost","root","","Spieleshop")
or die ("Keine Verbindung möglich, Versuchen Sie es später erneut!");

$abfrage = "select Bilder from Artikel";
$ergebnis = mysqli_query($link,$abfrage) or die (mysqli_error($link));
while($zeile = $ergebnis->fetch_array()):

?><div> 
<p><img src="<?= $zeile['Bilder'] ?>" ></p>
</div><?php 

endwhile;
?>



</body>
  <hr>
</html> 
