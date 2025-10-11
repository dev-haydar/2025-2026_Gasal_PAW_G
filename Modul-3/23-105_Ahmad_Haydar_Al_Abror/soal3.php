<?php 
 
 $height=array("Andy"=>"176","Barry"=>"165","Charlie"=>"170");  
  
 $height["alan"] = "177"; 
 $height["rocky"] = "159"; 
 $height["roni"] = "165"; 
 $height["bagas"] = "169"; 
 $height["boy"] = "173"; 
  
 end($height); 
 $keyakhir = key($height); 
 $valueakhir = current($height); 
 echo $keyakhir . " is " . $valueakhir . " cm tall"; 
  
 $weight=array("william"=>"50","julia"=>"71","han"=>"62"); 
 $keys = array_keys($weight); 
 $sec_key = $keys[2]; 
 echo "<br>". $sec_key . " is " . $weight[$sec_key] . " kg"; 
  
  
  
?>
