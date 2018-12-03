<?php
// Convert the input to an array
$input = file('input.txt', FILE_IGNORE_NEW_LINES);

// Kepp count of the times twice & thrice occurences appeared 
$appearedTwice = 0;
$appearedThrice = 0; 

foreach($input as $line){
  $twiceFound= false;
  $thriceFound = false;

  foreach(count_chars($line, 1) as $chars => $appeared){
    switch($appeared){
    case 2: 
      $twiceFound = true;
      break;
    case 3:
      $thriceFound = true;
      break;
    }
  }
  
  // Increment the appeared variable to get the checksum, if twice or thrice
  // detected in the lines 
  if($twiceFound == true)
    $appearedTwice++;

  if($thriceFound == true)
    $appearedThrice++;
}

$checksum = $appearedTwice * $appearedThrice;

echo "Your checksum is: $checksum \n";
