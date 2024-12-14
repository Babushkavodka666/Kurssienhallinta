<?php
include("yhteys.php");
$annettunimi = $_POST["opettaja"];

// tunnusnumeroa ei "anneta" vaan käytetään arvoa NULL
$sql = "INSERT INTO opettaja (tunnusnumero, etunimi, sukunimi, aine) VALUES (:'NULL', annettunimi, annettunimi, 'NULL')";
try { 
		$kysely = $yhteys->prepare($sql); 
		$kysely->execute(["annettunimi"=>$annettunimi]); 
	} catch (PDOException $e) { 
	die("VIRHE: " . $e->getMessage()); 
} 
echo "Käyttäjä $annettunimi lisätty!"
?>  