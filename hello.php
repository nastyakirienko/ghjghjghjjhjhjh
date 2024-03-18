<?php

//Your actual array...
$arr=Array (
    'Thursday' => 8,
    'Friday' => 7,
    'Monday' => 9,
    'Tuesday' => 12,
    'Wednesday' => 8,
    'Saturday' => 17
);

//This is the template array.. Changing this alters the output
$arr2=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

//A simple loop that traverses all elements of the template...
foreach($arr2 as $v)
{
    //If the value in the template exists as a key in the actual array.. (condition)
    if(array_key_exists($v,$arr))
    {
        $arr4[$v]=$arr[$v]; //The value is assigned to the new array and the key of the actual array is assigned as a value to the new array
    }
}

//prints the new array
print_r($arr4);



