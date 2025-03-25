<?php

$n=1000;
$count=0;

for ($i=0; $i<$n; $i++){
    for ($j=0; $j<$n; $j++){
        for ($k=0; $k<$n; $k++){
            $count++;
        }
    }
}

echo $count;
