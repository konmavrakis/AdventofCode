<?php
// Convert the input to an array
$lines = file('input.txt', FILE_IGNORE_NEW_LINES);

foreach ($lines as $line)  {

  foreach ($lines as $_line) {

    // Levenshtein - The Levenshtein distance is defined as the minimal number of characters
    // you have to replace, insert or delete to transform str1 into str2.
    // http://php.net/manual/en/function.levenshtein.php

    $distance = levenshtein($line, $_line);

    if ($distance == 1) {

      $firstLine = str_split($line);
      $secondLine = str_split($_line);

      // After we've succesfuly found the two arrays we can now find the extra
      $differingChar = array_diff_assoc($firstLine, $secondLine);

      // Remove the differing character 
      unset($firstLine[key($differingChar)]);

      // Print the results
      echo "1st Line: $line \n";
      echo "2nd Line: $_line \n";
      echo "Result:   " .  implode('', $firstLine) . "\n";
      exit();

    }

  }

}
