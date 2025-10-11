 <?php  
 
$fruits = array("avocado","bluebery","cherry"); 
echo "i like" . ",". 
$fruits[0].",".$fruits[1]."and".$fruits[2]."."; 
array_push($fruits,"apple","jeruk","mangga","nangka","buah 
naga"); 
 
print_r  ($fruits) ; 
$max_index =max(array_keys($fruits)); 
echo  "<br> index tertinggi dalam array fruits adalah:". 
$max_index; 
echo "<br>Nilai dengan indeks tertinggi adalah: " . $fruits[7] ; 
 
array_splice($fruits,3,1); 
 
echo "<br> data setelah di hapus<br>"; 
print_r($fruits); 
$max_index =max(array_keys($fruits)); 
echo  "<br> index tertinggi dalam array fruits adalah:". 
$max_index; 
echo "<br>Nilai dengan indeks tertinggi adalah: " . $fruits[6] . "<br>"; 
  
 
$veggies = array("carrot", "broccoli", "spinach",); 
 
echo "Data dalam array \$veggies:<br>"; 
foreach ($veggies as $veggie) { 
    echo $veggie . "<br>"; 
}

