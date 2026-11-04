<?php

//Function for bineair searching
function binarySearch($array, $target, $low, $high) {

if ($low > $high) {
  return false;
}

$mid = intdiv($low + $high, 2);

if ($array[$mid] == $target) {
  return true;
}

else if ($array[$mid] > $target) {
  return binarySearch($array, $target, $low, $mid - 1);
}

else {
  return binarySearch($array, $target, $mid + 1, $high);
}
}

// Makes a sorted list of 10.000 numbers
$numbers = range(10000, 1);

// The number that will be searched for
$target = 1200;

// Starts the timer to count how fast it sorts
$startTijd = microtime(true);

// Runs the binary search for the numberlist
$result = binarySearch($numbers, $target, 0, count($numbers) - 1);

// Stops the timer
$eindTijd = microtime(true);

// Bereken de totale tijd in milliseconden
$duurInMs = ($eindTijd - $startTijd) * 1000;

// Shows result and what number has been searched for
echo "<h3>Resultaat van Binair zoeken</h3>";
echo "Gezochte getal: <strong>" . $target . "</strong><br>";

// Shows the result of if the number has been found of not been found in the list
if ($result) {
  echo "<p> Het getal is gevonden in de lijst!</p>";
} else {
  echo "<p> Het getal is niet gevonden in de lijst!</p>";
}

// Shows the amount of numbers found in the list and the time of how long it took
echo "Aantal elementen in de lijst: " . number_format(count($numbers), 0, ',', '.') . "<br>";
echo "Benodigde tijd voor de zoekopdracht: <strong>" . number_format($duurInMs, 5) . " milliseconden</strong>";
echo "</div>";
?>