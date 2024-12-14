<?php
include("yhteys.php");
$annettunimi = $_POST["opiskelija"];

// tunnistetta ei "anneta" vaan käytetään arvoa NULL
$sql = "INSERT INTO opiskelija (opiskelijanumero, etunimi, sukunimi, syntymäpäivä, vuosikurssi) VALUES (:'NULL', annettunimi, 'NULL')";
try { 
		$kysely = $yhteys->prepare($sql); 
		$kysely->execute(["annettunimi"=>$annettunimi]); 
	} catch (PDOException $e) { 
	die("VIRHE: " . $e->getMessage()); 
} 
echo "Käyttäjä $annettunimi lisätty!"
?>  