<html lang="en">

<?php

$d = date("H");
if ($d < 12) {
  echo "Ochtend";
}
elseif ($d < 18) {
  echo "Middag";
}
elseif ($d < 24) {
  echo "Avond";
}
elseif ($d < 6) {
  echo "Nacht";
}

$dagdeel = "Ochtend";

  switch($dagdeel) {
    case "Ochtend" : echo "Goede morgen"; break;
    case "Middag"  : echo "Goede middag"; break;
    case "Avond"   : echo "Goede avond";  break;
    case "Nacht"   : echo "slaap lekker"; break;
  }

 $g1 = 30;
 $g2 = 10;
if ($g1 < $g2) {
  echo "getal2 is groter";
}
else
  echo "getal1 is groter";

$p = "150";
$p1= "55";
$p2= "56";
if ($p > 149 ) {
  echo "Oude prijs: 150. Na verhoging van 19% is de prijs: 178,5 geld";
}
elseif ($p1 < 56) {
  echo "Oude prijs: 55. Na verhoging van 11% is de prijs: 61,05 geld";
}
elseif ($p2 > 55) {
  echo "Oude prijs: 56. Na verhoging van 16% is de prijs: 64,96 geld";
}
?>
  </html>
