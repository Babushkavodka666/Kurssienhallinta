<?php 
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);
// Otetaan yhteys tietokantapalvelimeen
include ("yhteys.php");  // Sisällyttää aiemmin tehdyn yhteys.php-tiedoston tähän
// Taulun nimi on kurssit
// Listataan kaikki = *
$sql_lause =  "SELECT * FROM kurssi";
try {
  $kysely = $yhteys->prepare($sql_lause);
  $kysely->execute();
} 
 catch (PDOException $e) {
            die("VIRHE: " . $e->getMessage());
       }
$tulos = $kysely->fetchAll();
foreach($tulos as $rivi) {     
 // Muuta alle ne sarakkeiden nimet, mitä omassa kurssi-taulussasi on
 echo $rivi['nimi'] . ", " . $rivi['kuvaus'] .", " . $rivi['alkupäivä'] .",
  " . $rivi['loppupäivä'] .", " . $rivi['opettaja'] .", " . $rivi['tila'] .", 
  " . $rivi['opiskelija'] . ", " . $rivi[''] . "<br>";       
} 
?> 