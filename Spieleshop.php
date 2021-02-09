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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>



<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<?php 
$link=mysqli_connect("localhost","root","","Spieleshop")
or die ("Keine Verbindung möglich, Versuchen Sie es später erneut!");

$abfrage = "select Bilder, Artikelnr from Artikel";
$ergebnis = mysqli_query($link,$abfrage) or die (mysqli_error($link));
while($zeile = $ergebnis->fetch_array()):

?>
<div class ="container">
<div class="row text-center py-5">
<div class="col-md-3 col-sm-6 my-3 my-md-0">
<form action="Produkte.php" method="POST">
<div class="card shadow">
<input type="hidden"  name="Artikelnr" value="<?=$zeile['Artikelnr'] ?>" readonly>
<button>  
<div>
<p><img src="<?= $zeile['Bilder'] ?>" ></p>
</div>
</div>
</form>
</div>
</div>
</div>
</button>
<?php 

endwhile;
?>

</body>
  <hr>
</html> 
