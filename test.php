<?php

$names = [
    "John", "Michael", "Sarah", "Emma", "David",
    "Sophia", "Daniel", "Olivia", "James", "Isabella"
];

$randomName = $names[array_rand($names)];

echo $randomName;

?>
