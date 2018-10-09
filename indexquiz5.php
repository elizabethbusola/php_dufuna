<?php
    $firstname = array("Jason", "Patricia", "Peter");
    $hobby = array("swimming", "skating", "drumming");

        foreach (array_combine($firstname, $hobby) as $first => $hobb){
                echo "My name is " .$first. " I love " .$hobb. "<br>";
            }

?>