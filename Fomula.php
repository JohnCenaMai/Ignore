<?php
function sum($a,$b)
{
    return $a+$b;
}

function sumofarray($array)
{
    $sum = 0;
    $lengthArray = count($array);
    for($x = 0;$x < $lengthArray;$x++)
    {
        $sum+=$array[$x];
    }
    return $sum;
}