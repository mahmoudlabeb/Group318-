<?php
$array = [1,10,5,2,11];
$x=3;
$greater = 0;
$smaller = 0;

for($i=0;$i<count($array);$i++)
 {
     if($x > $array[$i])
     {
        $smaller = $smaller + 1;
     }
}
 echo "Numbers smaller then ($x) =  "  .  $smaller;
 echo "<br>";


for($i=0;$i<count($array);$i++)
{
    if($x <= $array[$i])
    {
        $greater += 1;
    }
}
echo "Numbers greater than ($x) =   " . $greater;
echo "<br>";

