<?php


function secondHighest(array $numbers) {
sort($numbers);
echo $numbers[sizeof($numbers)-2];
}
secondHighest($numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10]);