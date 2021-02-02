<html>
<body>
<form action="Liste.php" methode="get">
<select name="Liste" size="5">
<?php
$link=mysqli_connect("localhost","root","","Spieleshop");
$abfragee="SELECT * FROM Genre;";
$ergebnis=myqsli_query($link, $abfrage);
for($i=0; $i<mysqli_num_rows($ergebnis); $i++)
{$zeile=mysqli_fetch_row($ergebnis);
print "<option value = '$zeile[0]'>$zeile[1]</option>";
}
?>
</select>
</form>
</body>
</html>