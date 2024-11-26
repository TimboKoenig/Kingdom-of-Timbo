<?php
// Daten aus dem Formular abrufen
$name = $_POST['name'];
$profession = $_POST['profession'];
$institution = $_POST['institution'];
$email = $_POST['email'];
$anonymous = isset($_POST['anonymous']) ? "Anonym" : $name;
$newsletter = isset($_POST['newsletter']) ? "Ja" : "Nein";

// Daten in einer Textdatei speichern
$file = fopen("members.txt", "a");
fwrite($file, "$anonymous,$profession,$institution,$email,$newsletter\n");
fclose($file);

// Bestätigungsnachricht anzeigen
echo "<h1>Danke für deine Anmeldung!</h1>";
echo "<p>Wir haben deine Daten erhalten. Du bist nun Teil des Kingdom of Timbo.</p>";
echo "<p><a href='index.html'>Zurück zur Startseite</a></p>";
?>
