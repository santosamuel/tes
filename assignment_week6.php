<title>Santo Samuel Surja</title>
<h1>Welcome to my guessing game</h1>

<pre>
<?php
$number = 20;

if (count($_GET) == NULL){
    echo "Missing guess parameter";
} else{
    foreach ($_GET as $key => $value){
        if ($value == NULL){
            echo "Your guess is too short";
        } elseif (intval($value) == NULL){
            echo "Your guess is not a number";
        } elseif ($value < $number){
            echo "Your guess is too low";
        } elseif ($value > $number){
            echo "Your guess is too high";
        } elseif ($value == $number){
            echo "Congratulations - you are right";
        }
    }
}

//print_r($_GET);
//var_dump ($_GET);
?>
