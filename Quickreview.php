<?php

//variables :
  $name = "mak";
   echo $name;
   echo "<br>";

   // with "" :
   echo "My name is $name";
   echo "<br>";

   // with '';
   echo 'my name is $name';
   echo "<br>";

   // constant function :

   define('NAME',"mak");
   echo NAME;
   echo "<br>";


  //Operatores :
  // 
   $a = 10;
   $b = 5;
   $c = $a+$b;
   $d = $a-$b;
   $e = $a%$b;
   $f = $a/$b;
   $g = $a ** $b;
   echo $c,$d,$e,$f,$g;
   echo "<br>";

   //find value of data type :
    var_dump($a);
    echo "<br>";

   // $m = $a === $b;  "==="value check after data tpye check :

   //conditions : if 

   $a = 10;
   $b = 5;
   if ($a < $b){
    echo "a is smaller than the b";
   }else{
     echo " a is greater than the b";
   }
    
   // switch conditon :

    switch($a){
        case 1: echo "this is case one " ;
            break;
        case 2 : echo "this is case two " ;
            break;
        default : echo  "not match";       
    }

    echo "<br>";

  // while loop = 1st conditon check then executed in condition 
     while($a < 10);{
        echo "this is a while $a";
        $a++;
    }
    echo "<br>";
  // do  while = 1st executed in inner the check the conditions ;
  
    do{
        echo "this is do while loop ";
        $a++;
    }while(100<10);

   // for loop : 
    for ($a=1 ; $a<10 ; $a++){
        echo "this is foor loop <br>" ;
    } 
    echo "<br>";

    //String :

    $a = "hello world";
    echo strlen($a);
    echo "<br>";
    echo str_word_count($a);


    //functions :

    echo "<br>";

    function sum($a,$b){
        //$a = 10;
        //$b = 5;
        $c = $a + $b;
        echo $c;
    }
    sum(10,10);
    echo "<br>";


    //Array ;
     // index array
     
     $new = array("a","b","c");
     echo $new[1];
     echo "<br>"; 

     //associcated :

     $new = array("keya"=>"a","keyb"=>"b","keyc"=>"c");
     echo $new["keyc"];

    // foreach = this is made for associcated array :
         echo "<br>";
        foreach($new as $mak){
        echo $mak;
        }


  

















    


?>