<?php
    $firstname = array("Jason", "Patricia", "Peter");
    $hobby = array("swimming", "skating", "drumming");

    // echo "My name is ".$firstname[0]. " I love ".$hobby[0];
    // echo "<br>";
    // echo "My name is ".$firstname[1]. " I love ".$hobby[1];
    // echo "<br>";
    // echo "My name is ".$firstname[2]. " I love ".$hobby[2];
    $name = array("Jason"=>"swimming", "Patricia"=>"skating", "Peter"=>"drumming");
    foreach ($name as $value=>$value2){
        echo "My name is " .$value. " I love " .$value2. "<br>";



    }

?>