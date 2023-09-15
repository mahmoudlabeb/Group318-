<?php
$names = ["Alice", "Bob", "Charlie", "Dave"];
function searchs ($names = ["Alice", "Bob", "Charlie", "Dave"])
{
    for($i=0;$i<count($names);$i++)
    {
        if($names[$i]=="Bob")
        return 1;
    }
}

$n=searchs($names);
echo $n;