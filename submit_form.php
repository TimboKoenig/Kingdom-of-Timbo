<?php
$name = $_POST['name'];
$profession = $_POST['profession'];
$institution = $_POST['institution'];
$email = $_POST['email'];
$anonymous = isset($_POST['anonymous']) ? "Anonym" : $name;

$file = fopen("members.txt", "a");
fwrite($file, "$anonymous,$profession,$institution\n");
fclose($file);

echo "<h1>Danke für deine Anmeldung!</h1>";
echo "<p>Wir haben deine Daten erhalten. Du bist nun Teil des Kingdom of Timbo.</p>";
echo "<p><a href='index.html'>Zurück zur Startseite</a></p>";
?>
