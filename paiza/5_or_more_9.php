<?php

$n = trim(fgets(STDIN));

$ans = 0;

for ($i = 0; $i < $n; $i++) {
    $n = trim(fgets(STDIN));
    if ($n >= 5) {
        $ans += $n;
    }
}

echo $ans . "\n";