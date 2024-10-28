

<?php
$userNumbers = $_POST['userNumbers'];
$randomNumbers = [];


while (count($randomNumbers) < 6) {
    $number = rand(1, 49);
    if (!in_array($number, $randomNumbers)) {
        $randomNumbers[] = $number;
    }
}

echo "Twoje liczby: " . implode(", ", $userNumbers) . "<br>";
echo "Wylosowane liczby: " . implode(", ", $randomNumbers) . "<br>";
?>


