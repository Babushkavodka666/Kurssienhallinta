<?php
include("yhteys.php");
$annettunimi = $_POST["kurssi"];

// tunnusnumeroa ei "anneta" vaan käytetään arvoa NULL
$sql = "INSERT INTO kurssi (tunnus, nimi, kuvaus, alkupäivä, loppupäivä, opettaja, tila) VALUES (:'NULL', annettunimi, 'NULL', 'NULL', annettunimi, 'NULL')";
try { 
		$kysely = $yhteys->prepare($sql); 
		$kysely->execute(["annettunimi"=>$annettunimi]); 
	} catch (PDOException $e) { 
	die("VIRHE: " . $e->getMessage()); 
} 
echo "Käyttäjä $annettunimi lisätty!"
?>  

