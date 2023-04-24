<?php

/* Loops are used to execute the same block of code again and again, as long as a certain condition is true.

  In PHP, we have the following loop types:

  while - loops through a block of code as long as the specified condition is true
  do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
  for - loops through a block of code a specified number of times
  foreach - loops through a block of code for each element in an array

 1. The while loop - Loops through a block of code as long as the specified condition is true
  synthax :
       while (condition is true) {
    code to be executed;
 }
*/
    $x = 1;
    while($x <= 5){
        echo "thr number is : $x <br> ";
    }
    $x++ ;

?>