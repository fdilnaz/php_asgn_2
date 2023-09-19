<?php

function fibonacci($limit) {
    $start = 0;
    $end = 1;

    for ($i = 1; $i <= $limit; $i++) {
        echo $start . ' ';
        $next = $start + $end;
        $start = $end;
        $end = $next;
    }
}

fibonacci(15);
