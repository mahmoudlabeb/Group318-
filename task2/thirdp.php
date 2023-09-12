<?php
$array = [1,10,5,2,11];
$max=$array[0];
$min=$array[0];

for($i=0;$i<count($array);$i++)
{
    if($max < $array[$i])
    {
        $max = $array[$i];
    }
}
echo "Largest number is: " . $max;
echo "<br>";

for($i=0;$i<count($array);$i++)
{
    if($min > $array[$i])
    {
        $min = $array[$i];
    }
}
echo "Smallest number is: " . $min;