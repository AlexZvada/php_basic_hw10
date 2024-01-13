<?php


function fibonachiGenerator(int $number)
{
    yield 0;
    yield 1;
    $prev1 = 0;
    $prev2 = 1;
    for ($i = 1; $i <= $number; $i=$prev1+$prev2){
        $prev1 = $prev2;
        $prev2 = $i;
        yield $i;
    }
}


foreach (fibonachiGenerator(1000000) as  $value) {
   echo $value . PHP_EOL;
}




