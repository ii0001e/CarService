<?php
$servernimi = "localhost";
$kasutajanimi = "pavelivanov";
$parool = "(DTAU4)(vJ)vS3@o";
$andmebaas = "fordiplomawork";
$yhendus = new mysqli($servernimi, $kasutajanimi, $parool, $andmebaas);
$yhendus->set_charset('UTF8');
//ühenduse kontroll
if (!$yhendus) {
    die('Ei saa ühendust andmebaasiga');
}
