<?php
// Ingore the Notices
// Turn the input into an array
$numbers = file('numbers.txt', FILE_IGNORE_NEW_LINES);
$frequency = 0;
$result = Array();

// Loop ∞ to find the second occurance of frequency
while (true) {

  foreach ($numbers as $key => $number) {
    $frequency += $number;
    $result[$frequency]++;

    if ($result[$frequency] == 2) {
      print "Frequency that occured twice: $frequency \n";
      die;
    }
  }
}
