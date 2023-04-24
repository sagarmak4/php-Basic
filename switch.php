<?php
/* Use the switch statement to select one of many blocks of code to be executed.
   synthax :

   switch (n) {
    case label1:
      code to be executed if n=label1;
      break;
    case label2:
      code to be executed if n=label2;
      break;
    case label3:
      code to be executed if n=label3;
      break;
      ...
    default:
      code to be executed if n is different from all labels;
  }
*/
   $fav = "blue";
    switch($fav){
        case "red":
            echo "your favorite color is red";
            break;
        case "blue":
            echo "your favorite color is blue";
            break;
        case "green":
            echo "your favorite color is green";
            break;
            default:
            echo "your favorite color is not all";        
    }

?>