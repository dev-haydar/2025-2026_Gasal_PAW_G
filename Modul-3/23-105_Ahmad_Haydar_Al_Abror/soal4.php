<?php 
$height=array("Andy"=>"176","Barry"=>"165","Charlie"=>"170"); 
foreach($height as $x =>$x_value){ 
echo "key=".$x.",value=". $x_value; 
echo "<br>"; 
} 
$height["David"] = "180";  
$height["Edward"] = "175";  
$height["Frank"] = "168";  
$height["George"] = "172";  
$height["Henry"] = "169";  
echo "<br>Data setelah penambahan:<br>"; 
foreach($height as $key => $value){ 
echo "key=" . $key . ", value=" . $value . "<br>"; 
} 
$weight = array("Andy" => "70", "Barry" => "65", "Charlie" => "68"); 
echo "<br>Data dari array \$weight:<br>"; 
$weightKeys = array_keys($weight);  
for ($i = 0; $i < count($weight); $i++) { 
echo "key=" . $weightKeys[$i] . ", value=" . 
$weight[$weightKeys[$i]] . "<br>"; 
}
