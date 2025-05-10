<?php
//define the number
$number = -4;

//check if the number is positive or negative
if ($number > 0){
    $sign = "positive";
}elseif ($number < 0){
    $sign = "negative";
}else{
    $sign + "Zero";
}

// check if the number is even or odd

if ($number % 2 == 0){
    $parity = "Even";
}else {
    $parity ="Odd";
}

//Final output

if ($number == 0){
    echo " The number $number is Zero.";
}else {
    echo "The number $number is $sign and $parity.";
}
    
    
?>