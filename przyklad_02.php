<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
//WHILE


$tablicaOwoce = array (
"jabłko",
"gruszka",
"wiśnia",
"czereśnia"
);
echo '<hr />';


$tablicaCelebryci = array (
"Radosław Majdan",
"Borys Szyc",
"Dorota Rabczewska",
"Justin Bieber",
"Kuba Wojewódzki"
);


$dlugoscTablicyOwoce=count($tablicaOwoce);
$i=0;
while($i < $dlugoscTablicyOwoce){
  echo "Owoc: ", $tablicaOwoce[$i],"<br />";
  $i++;
}

$tablicaSamochody = array(
array("Syrena", "Polonez", "Husarya"),
array("Ford", "Dodge", "GMC","Corvette"),
array("Citroen","Renault","Peugeot"),
array("Fiat","Ferrari","Lamborgini")
);

$dlugoscTablicySamochody=count($tablicaSamochody);

$i=0;

while($i < $dlugoscTablicySamochody){
    $j=0;                                           //$j musi być tutaj żeby się zerowało (!)
    $dlugosc_kraj=count($tablicaSamochody[$i]);
        while($j<$dlugosc_kraj){
          echo "Samochód: ", $tablicaSamochody[$i][$j],"<br />";
          $j++;
        };
    $i++;                                            //dopiero jak wybierze wszystkie ze srodka do przechodzi do nastepnej tablicy
};


//DO WHILE

echo "<hr />DO WHILE:<br />";

$t=1;

do {
  echo "Licznik: ", $t,"<br />";
  $t++;
}while($t<10);

$t=0;
$dlugoscTablicyCelebryci = count($tablicaCelebryci);

do {
  echo "Celebryta: ", $tablicaCelebryci[$t],"<br />";
  $t++;
}while ($t<0);






     ?>
  </body>
</html>
