<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
for($i=1;$i<=10;$i++){ //licznik, warunek, inkrementacja
  echo $i,'<br />'; //wyswietl zmienna i
};
/*
for($i=1;$i>=10;$i++){ //nie wykona się wcale
  echo $i,'<br />';
}
*/

$tablicaOwoce = array (
"jabłko",
"gruszka",
"wiśnia",
"czereśnia"
);
echo '<hr />';

$dlugoscTablicyOwoce = count($tablicaOwoce);
echo "Długość tablicy owoce to:",$dlugoscTablicyOwoce,"<br />";
for ($i = 0; $i < $dlugoscTablicyOwoce; $i++){
  echo $tablicaOwoce[$i], "<br />";
};

$tablicaSamochody = array(
array("Syrena", "Polonez", "Husarya"),
array("Ford", "Dodge", "GMC"),
array("Citroen","Renault","Peugeot"),
array("Fiat","Ferrari","Lamborgini")
);
echo "<pre>";
var_dump($tablicaSamochody);
echo "</pre>";
echo "<hr />";

/*$dlMain=count($tablicaSamochody);
echo $dlMain;
$dl1=count($tablicaSamochody[0]);
echo $dl1;
$dl2=count($tablicaSamochody[1]);
$dl2=count($tablicaSamochody[2]);
$pl = $tablicaSamochody[0];
for ($i=0;$i<$dlMain;$i++){
  for($i=0;$i<$dl1;$i++){
    echo $pl[$i];
    }
  for($i=0;$i<$dl1;$i++){
      echo $pl[$i];
    }
  for($i=0;$i<$dl1;$i++){
        echo $pl[$i];
      }

};*/
/*
dorob dlugosc

for ($i = 0; $i < $dlugoscTablicaSamochody; $i++){
  $dlugoscElementowTablica = count($tablicaSamochody[$i]);
    for($j = 0; $j<$dlugoscElementowTablica; $j++){
      echo $tablicaSamochody[$i][$j], "<br />";
    };
};*/


//
echo "FOREACH LOOP:<br />";

foreach ($tablicaOwoce as $elementOwoc){ //tablica, element tablicy
  echo "owoc:", $elementOwoc, "<br />";
};

foreach ($tablicaSamochody as $kraje){ //tablica, element tablicy
  foreach ($kraje as $samochod){
    echo $samochod;
  };
};

echo "<hr />";

$tablicaDaneOsobowe= array(
  "imie"=>"Emilia",
  "nazwisko"=>"Godlewska",
  "wiek"=> 25,
  "kraj_zamieszkania"=> "Polska",
  "miasto_zamieszkania"=>"Warszawa",
  "plec"=>"k"
);

foreach ($tablicaDaneOsobowe as $key=>$dane){
  echo $key, ": ", $dane,"<br />";
};

echo "<hr />";
$tablicaDaneOsobowe= array(
  array("imie"=>"Emilia",
  "nazwisko"=>"Godlewska",
  "wiek"=> 25),
  array("imie"=>"Marta",
  "nazwisko"=>"Przychodzen",
  "wiek"=> 26),
  array("imie"=>"Gośka",
  "nazwisko"=>"Godlewska",
  "wiek"=> 28)
  );
  foreach ($tablicaDaneOsobowe as $klucz=>$osoba){
    //if (($klucz+1)%2!=0){ //tylko nieparzyste
    if (($klucz+1)%2){
    echo "<strong>Osoba</strong> ", $klucz+1, ":<br />";
    foreach ($osoba as $dane=>$wartosc){
    echo $dane, ": ", $wartosc, "<br />";
  }; continue; //przerwie tylko dla spełnionego warunku. dla niespełnionego idzie dalej.
  };
  echo 'test', $klucz+1, '<br />';
  };

     ?>
  </body>
</html>
