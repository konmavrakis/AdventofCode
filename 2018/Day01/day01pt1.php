<?php
// Turn the input into an array
$numbers = file('numbers.txt', FILE_IGNORE_NEW_LINES);
$frequency = 0;

// Iterate through the numbers to calculate the frequency
foreach($numbers as $number){
  $frequency += intval($number);
}

echo "Frequency: $frequency \n";
