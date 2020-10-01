

<?php

$huis = new House ("5", "2", "JA", "Water", "Marslaan", "4A", "Assen", "250m2", "250");
echo "<h2>Home-Info</h2>";
echo "Aantal kamers:\t" , $huis->getKamers();
echo "<br>";
echo "Aantal toiletten:\t" , $huis->getToilet();
echo "<br>";
echo "Huis met verwarming:\t" , $huis->getverwarming();
echo "<br>";
echo "Soort verwarming:\t" , $huis->getTypeVerwarming();
echo "<br>";
echo "Straatnaam:\t" , $huis->getStraatnaam();
echo "<br>";
echo "Huisnummer:\t" , $huis->getHuisnummer();
echo "<br>";
echo "Woonplaats:\t" , $huis->getPlaats();
echo "<br>";
echo "Vierkante meter grond:\t" , $huis->getVierkantemetergrond();
echo "<br>";
echo "Woz waarde:\t" , $huis->getWozwaarde();




 ?>
