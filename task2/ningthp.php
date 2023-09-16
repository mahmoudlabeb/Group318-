<?php
$numbers = [1, 2, 5, 6, 7, 20, 25, 30, 40, 55, 66];
$x = 40;



function natural($x )
{

    if( $x>0)
    {
        echo "psitive";
        echo "<br>";
    }else if( $x<0){
        echo "negative";
        echo "<br>";
    }
}



function primeCheck($x){
	if ($x == 1)
	return 0;
	
	for ($i = 2; $i <= sqrt($x); $i++){
		if ($x % $i == 0)
			return 0;
	}
	return 1;
}

$flag = primeCheck($x);
if ($flag == 1)
{
	echo "Prime";   echo "<br>";}
else{
	echo "Not Prime";
    echo "<br>";
}
function odd_even ($x)
{
    if($x%2==0)
    {
        echo "\$x is even";
        echo "<br>";
    }else
    {
        echo "\$x is odd";
        echo "<br>";
    }
}

function found ($numbers = [1, 2, 5, 6, 7, 20, 25, 30, 40, 55, 66])
{
    $x=40;
for($i=0;$i<count($numbers);$i++)
{
    if($x==$numbers[$i])
    {
        echo " found ";
        echo "<br>";

    }
}
}
natural( $x );
odd_even ($x);
found ($numbers = [1, 2, 5, 6, 7, 20, 25, 30, 40, 55, 66] );