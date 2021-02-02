<?php
$vorname = filter_input(INPUT_GET, 'vornameDB');
$nachname = filter_input(INPUT_GET, 'nachnameDB');
$geburtsdatum = filter_input(INPUT_GET, 'geburtsdatumDB');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "spieleshop";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO kunde (Vorname, Nachname, Geburtsdatum)
VALUES ('$vorname', '$nachname', '$geburtsdatum')";
if ($conn->query($sql)){
echo "Sie haben sich erfolgreich registriert!";
    
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>
<html>

<head>
    <p id="zuruek"><a href="Spieleshop.php">Zurück</a></p>
        
</head>
</html>
