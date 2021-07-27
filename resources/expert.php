<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "Exercise 1 starts here:";
function new_exercise($x)
{
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

new_exercise(4);
foreach ($week as &$day) {
    $day = substr($day, 0, -3);
}

print_r($week);

new_exercise(5);
$arr = [];
for ($letter = "a"; count($arr) < 26; $letter++) {
    array_push($arr, $letter);
}

print_r($arr);

new_exercise(6);
$arr = [];

function combineNames($str1 = "", $str2 = ""){
    $params = [$str1, $str2];
    foreach ($params as $i => &$param) {
        if ($param == "") {
            $param = randomHeroName($i);
//            print_r($param) // check if randomHeroName works, it doesnt so go check the function
        }
    }
    return join(" - ", $params); // use return instead of echo,
}

function randomHeroName(){
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $nameList = $heroes[rand(0, count($heroes) - 1)]; // -1 want je hebt 2 items in heroes and we willen enkel tss 0 en 1
    $randomElement = rand(0, 10);
    $randName = $nameList[$randomElement];

    return $randName; // we don't want echo but return, want anders wordt het niet opgeroepen in andere functie
}

echo "Here is the name: " . combineNames();

new_exercise(7);
function copyright(string $year)
{
    return "&copy; $year BeCode";
}

echo copyright(date("Y"));


new_exercise(8);
function login(string $email, string $password)
{
    if ($email === "john@example.be" || $password === "pocahontas") {
        return "Welcome John Smith </br>";
    } else {
        return "No access";
    }
}

/* do not change any code below */
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//Should say: no access
echo login('john@example.be', 'dfgidfgdfg');
//Should say: no access
echo login('wrong@example', 'wrong');
/* You can change code again */

new_exercise(9);
////function isLinkValid(string $link) {
////    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');
////    foreach ($unacceptables as $unacceptable) {
////        if (strpos($link, $unacceptable) == true) {
////            return "Unacceptable Found</br>";
////        };
////    }
////    return "Acceptable</br>";
////}
////invalid link
//isLinkValid('http://www.google.com/hack.pdf');
////invalid link
//isLinkValid('https://google.com');
////VALID link
//isLinkValid('http://google.com');
////VALID link
//isLinkValid('http://google.com/test.txt');

new_exercise(10);
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];

$result = array_intersect($areTheseFruits, $validFruits);
$elements = count($areTheseFruits);

for ($i = 0; $i < $elements; $i++) {
    if (!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);







