<?php

$raw = file_get_contents('data.txt');
$data = explode("\n", $raw);

foreach ($data as $pair) {
    $assignements[] = explode(",", $pair);
}

foreach ($assignements as $assignementPair) {
    $firstOfPair[] = explode("-", $assignementPair[0]);
    $secondOfPair[] = explode("-", $assignementPair[1]);
}

$overlap = 0;

for ($i=0; $i < count($secondOfPair); $i++) { 
    if (
        (intval($firstOfPair[$i][0]) <= intval($secondOfPair[$i][0])) && (intval($firstOfPair[$i][1]) >= intval($secondOfPair[$i][1]))
        ||
        (intval($secondOfPair[$i][0]) <= intval($firstOfPair[$i][0])) && (intval($secondOfPair[$i][1]) >= intval($firstOfPair[$i][1]))
        ) 
        {
            $overlap++;
        }
}
var_dump($overlap);

// =================== Part two ======================

var_dump($firstOfPair[0], $secondOfPair[0]);

$overlapP2 = 0;

for ($i=0; $i < count($secondOfPair); $i++) { 
    if (
        (intval($firstOfPair[$i][0]) <= intval($secondOfPair[$i][0])) && (intval($firstOfPair[$i][1]) >= intval($secondOfPair[$i][0]))
        ||
        (intval($secondOfPair[$i][0]) <= intval($firstOfPair[$i][0])) && (intval($secondOfPair[$i][1]) >= intval($firstOfPair[$i][0]))
        ) 
        {
            $overlapP2++;
        }
}
var_dump($overlapP2);