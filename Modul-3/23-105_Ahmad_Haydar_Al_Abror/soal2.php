<?php 
$fruits = array("avocado", "blueberry", "cherry"); 
$arrlength = count($fruits); 
$newFruits = array("apple", "jeruk", "mangga", "nangka", "buah naga"); 
for ($i = 0; $i < count($newFruits); $i++) { 
array_push($fruits, $newFruits[$i]); 
} 
$arrlength = count($fruits); 
for ($x = 0; $x < $arrlength; $x++) { 
echo $fruits[$x]; 
echo "<br>"; 
} 
echo "Jumlah data dalam array \$fruits saat ini: " . $arrlength; 
$veggies = array("carrot", "broccoli", "spinach"); 
for ($x = 0; $x < count($veggies); $x++) { 
echo $veggies[$x]; 
echo "<br>"; 
} 
?>
