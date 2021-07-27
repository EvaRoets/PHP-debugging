<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "Exercise 1 starts here:";
function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
new_exercise(2);
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);
$str = "Debugged! Also very fun";
echo substr($str, 0, 10);

new_exercise(4) ;
foreach($week as &$day) {
    $day = substr($day, 0, -3);
}

print_r($week);

new_exercise(5) ;
$arr = [];
for ($letter = "a"; count($arr) < 26; $letter++) {
    array_push($arr, $letter);
}

print_r($arr);

//new_exercise(6) ;
//new_exercise(7) ;
//new_exercise(8) ;
//new_exercise(9) ;
//new_exercise(10) ;



