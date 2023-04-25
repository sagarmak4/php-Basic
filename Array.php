<?php
$cars = array("Bmw","volov","neno");
 echo "i like " . $cars[0] . "," . $cars[1] . "<br>";




 /* three types of arrays:

 Indexed arrays - Arrays with a numeric index
 Associative arrays - Arrays with named keys
 Multidimensional arrays - Arrays containing one or more arrays 

 The count() function is used to return the length (the number of elements) of an array:
*/
 
 $cars = array ("bmw","volov","neno");
 echo count($cars);
 echo "<br>";


// PHP index : The index can be assigned automatically (index always starts at 0) :
   
// loop thorugh index array :
  
 $cars = array("Bmw","volov","neno");

 $arrlength = count($cars);

 for($x = 0 ; $x < $arrlength ; $x++){
    echo $cars[$x];
    echo "<br>";
 }
 

?>