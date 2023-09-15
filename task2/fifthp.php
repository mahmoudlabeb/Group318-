<?php
$array = ["eraasoft", "backend", "group313"];
function Array_of_names ( $array = ["eraasoft", "backend", "group313"]) 
{
    return ($array=[ucfirst("eraasoft"), ucfirst("backend"), ucfirst("group313")]);
}


$array = Array_of_names(["eraasoft", "backend", "group313"]);
print_r($array);