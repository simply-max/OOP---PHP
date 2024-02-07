<?php

// Funktion um 2 Arrays mit Binärwerten zu addieren:
function addBinaryArrays($array1, $array2) {

    // Ermittlung der Länge des längsten Arrays und Anpassung der beiden Arrays auf die selbe Länge:
    $length = max(count($array1), count($array2));
    // "-$lenght" um die 0 am Anfang des Arrays hinzuzufügen, sollte das Array angepasst werden müssen:
    $array1 = array_pad($array1, -$length, 0);
    $array2 = array_pad($array2, -$length, 0);

    $carry = 0;
    $result = [];

    /*
      Bei der Verarbeitung von Binären Zahlen ist die Rechenrichtung von rechts nach links,
      daher wird auch die Schleife in dieser Richtung durchlaufen.
    */
    for ($i = $length - 1; $i >= 0; $i--) {
        $sum = $array1[$i] + $array2[$i] + $carry;
        $result[$i] = $sum % 2;   // Bit-Wert an dieser Stelle berechnen. Ausgabe 0 oder 1.
        $carry = floor($sum / 2); // Rest für nächste Stelle berechnen
    }

    if ($carry > 0) {
        array_unshift($result, $carry);
    }

    return $result;
}

$array1 = [1, 0, 1, 1];
$array2 = [1, 1, 1, 0];

$result = addBinaryArrays($array1, $array2);

echo "<p>Ergebnis: " . implode($result). "</p>";