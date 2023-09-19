<?php

// For Loop
function evenNumbers($start, $end, $stepping) {
    for ($i = $start; $i <= $end; $i+=$stepping) {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
    }
}

evenNumbers(2, 20, 2);





