<?php
$servernimi = "localhost";
$kasutaja  = "root";
$parool = "";
$andmebaas = "restoraan";
$yhendus = new mysqli($servernimi,$kasutaja,$parool,$andmebaas);
$yhendus-> set_charset("utf8");
?>
