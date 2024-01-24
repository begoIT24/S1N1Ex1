<?php
session_start();
$_SESSION['username'] = $_POST['nom'];
$mail = $_POST['mail'];
$curs = $_POST['curs'];
echo "Dades rebudes:";
echo "</br>" . "</br>";

echo "username: ". $_SESSION['username'] . "</br>";
echo "e-mail: $mail" . "</br>";
echo "curs: $curs";