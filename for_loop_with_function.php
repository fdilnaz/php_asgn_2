<?php

// For Loop
function evenNumbers($start, $end, $stepping) {
    if($start % 2 !== 0){
        $start += 1;
    for ($i = $start; $i <= $end; $i+=$stepping) {       
            echo $i . ' ';
        }
    }
}

evenNumbers(1, 20, 2);





