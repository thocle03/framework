<?php
$fullname = "Thomas Clerc";
echo "Bonjour ";
echo $fullname;
echo " et bienvenue sur le site !<br>";
$number = 10;
$result = ($number + 5) * $number;
define("CONSTANT", "M. ");
echo CONSTANT;
echo "$fullname<br>";
$age = 18;
echo "Vous avez $age ans<br>";
$isEnabled = true;

if ($isEnabled == true) {
    echo "Vous êtes autorisé à accéder au site ✅<br>";
}
else {
    echo "Accès refusé ❌ <br>";
}
$fruits = array('mango', 'lemon', 'blueberry');
print_r($fruits);
echo "<br>";
var_dump($fruits);
$ingredients = array('eggs', 'milk', 'butter');
echo "<br>";
echo $ingredients[2];
$objets = array("chair", "book", "lamp");
array_push($objets, "chair");
echo "$objets[3]<br>";
unset($objets[2]);
print_r($objets);
array_push($objets, "laptop");
echo "<br>";
print_r($objets);
?>
