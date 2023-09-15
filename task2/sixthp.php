<?php
$nums = [0,1,0,3,12];
$temp;
function num ($nums = [0,1,0,3,12])
{

    for($i=0;$i<count($nums);$i++)
    {
        if($nums[$i]==0)
        unset($nums[$i]);
    }

$nums[]=0;
$nums[]=0;
print_r($nums);

    
}


num($nums = [0,1,0,3,12]);