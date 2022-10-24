<?php 
$nombre = 0;
echo "Les nombres paires compris entre 0 et 10 : ";
while ( $nombre <= 10) {
	if ($nombre % 2 ==0) {
		echo $nombre;
	}
	else{
		echo ",";
	}
	if ($nombre == 9) {
		break;
	}
	$nombre ++;
}
echo "<br>";
$min = 1;
$max = 6;
echo mt_rand($min,$max);
echo "<br>";
$random = mt_rand($min,$max);
if ($random == 6) {
	echo "Yes I win !<br>";
}
else{
	echo "So close. . .<br>";
}

$month="January";
switch ($month) {
	case 'January':
		echo "Winter";
		break;

	case 'April':
		echo "Spring";
		break;

	case 'July':
		echo "Summer";
		break;

	case 'October':
		echo "Fall";
		break;
}
echo "<br>";
$numberr = 3.4;
$ensemble = floor($numberr);
$fraction = $numberr - $ensemble;
if ($fraction >= 0.5) {
	echo ceil($numberr);
}
else
	echo floor($numberr);
$i = 0;
while ( $i <= 100) {
	if ($i % 3 == 0) {
		echo "fizz";
	}
	elseif ($i % 5 ==0) {
		echo "buzz";
	}
	elseif ($i % 3 ==0 && $i % 5 ==0) {
		echo "fizzbuzz";
	}
	elseif ($i % 7 ==0) {
		echo "";
	}
	else{
		echo $i;
	}
	$i ++;
	echo "<br>";
}
echo "<br><br>";
$tableau = array();
$minn = 0;
$maxx = 100;
for ($t = 0; $t < 20 ; $t++){
	$tableau[] = mt_rand($minn,$maxx);
}
print_r($tableau);
echo "<br>";
echo "<br>";

 function decrement($n) 
  {
    if($n > 0)
    {
      print("$n\n");
      decrement($n - 1);
    }
  }
  decrement(10);

echo "<br>";
echo "<br>";

$liste = array(1,2,3,4,1,2,3,9);
$unique = array_unique($liste);
print_r($unique);
echo "<br>";

function fact($n){ 
    $f = 1; 
    for ($i = 1; $i <= $n; $i++){ 
      $f = $f * $i; 
    } 
    return $f; 
  } 
    
  $n = 5; 
  $f = fact($n); 
  echo "La factorielle de $n est $f"; 

echo "<br>";
echo "<br>";

for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo $i;
        echo "*";
        echo $j;
        echo "=";
        $calcul = $j * $i;
        echo $calcul;
        echo " ";
    }
    echo "<br>";
}
echo "</pre>";
?>