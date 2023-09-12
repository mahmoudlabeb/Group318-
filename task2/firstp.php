<?php
$array = [2, 5, 4, 8, 6];
$sum=0;
$avg=0;

for($i=0;$i<count($array);$i++)
{
    $sum += $array[$i];
}
$avg = $sum / count($array);
echo $avg;