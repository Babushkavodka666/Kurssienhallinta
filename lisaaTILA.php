<?php
include("yhteys.php");
$annettunimi = $_POST["tilan_nimi"];
// tila-taulussa on kentät nimi ja tunniste
// tunnistetta ei "anneta" vaan käytetään arvoa NULL
$sql = "INSERT INTO tilat (tilanimi, 'tilatunnus') VALUES (:sali, 'NULL')";
try { 
		$kysely = $yhteys->prepare($sql); 
		$kysely->execute(["annettunimi"=>$annettunimi]); 
	} catch (PDOException $e) { 
	die("VIRHE: " . $e->getMessage()); 
} 
echo "Käyttäjä $annettunimi lisätty!"
?>  
