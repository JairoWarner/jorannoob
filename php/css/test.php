<?php
$today = date("j f y");
echo "Vandaag is het: $today";
echo "<br></br>";

$day = date("z");
echo "Het is vandaag: ","$day","e dag van het jaar";
echo "<br></br>";

$month = date("f");
$daysInMonth = date("t");
echo "Deze maand, $month heeft $daysInMonth dagen";
echo "<br></br>";

$week = date("W");
echo "Deze week is het week: $week";
?>