<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);
$arrA = [0,1,2,3];

var_dump($arrA);


$arrayIndex = [
    "Guilherme",
    "Marilei",
    "Lanna"
];
$arrayIndex[] = "Shake";
$arrayIndex[] = "Nina";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "Gui" => "Guilherme",
    "Mari" => "Marilei",
    "Amor" => "Lanna",
    "Teiqui" => "Shake"
];
$arrayAssoc["Minina"] = "Nina";
$arrayAssoc["Poçante"] = "Celta";

var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$gui = ["Guilherme", "Provenci"];
$guiLima = ["name" => "Guilherme", "lastName" => "Provenci"];
$names = [
    $gui,
    $guiLima
];
var_dump($names);

var_dump([
    "gui" => $gui,
    "guiLima" => $guiLima
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$family = [
    "family" => "Familia 1",
    "person" => "Guilherme",
    "mother" => "Marilei",
    "girlfriend" => "Lanna",
    "dog" => "Shake",
    "cat" => "Nina"
];

echo "<p> o cachorro da família é o {$family["dog"]}, e a gate é a  {$family["cat"]}</p>";

$otherFamily =  [
    "family" => "Familia 2",
    "person" => "Guilherme2",
    "mother" => "Marilei2",
    "girlfriend" => "Lanna2",
    "dog" => "Shake2",
    "cat" => "Nina2"
];
//echo "<p> o cachorro da outra família é o {$otherFamily["dog"]}, e a gate é a  {$otherFamily["cat"]}</p>";
$families = [
    "family" => $family,
    "otherFamily" => $otherFamily
];

var_dump($families);

echo "<p>{$families["otherFamily"]["person"]}</p>";

foreach ($family as $members) {
    echo "<p>{$members}</p>";
}

foreach ($family as $key => $value) {
    echo "<p>{$value} is a {$key} of family!</p>";
}


foreach ($families as $family) {
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $family);
}

