
<?php

$inputNumber = $_POST['number'];

$winningNumber = rand(1, 49);

echo "your number: " . $inputNumber . "<br>";

echo "wining number: " . $winningNumber . "<br>";

if($inputNumber == $winningNumber){

    echo "you won";
}
else{

    echo "you lost";
}

?>