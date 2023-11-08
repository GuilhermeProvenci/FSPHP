<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping = 1;
$while = [];

while($looping <= 5){
    $while[] = $looping;
    $looping++;
}
echo '<pre>';
var_dump($while);
echo '</pre>';

$looping = 5;
$while = [];

do {
    $while[] = $looping;
    $looping--;
} while ($looping >=1);
echo '<pre>';
var_dump($while);
echo '</pre>';



//3 min e 27

/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

for($i = 1; $i <= 10; $i++){
   echo "<p>{$i}</p>";
};


/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for($c = 1; $c <= 10; $c++){
    if ($c % 2 == 0){
        continue;
    }
    if ($c >7){
        break;
    };

    echo "<p> Pulou + 2 :: c = {$c} </p>";
};




/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

$array = [];
for($ar =0; $ar <= 10; $ar++ ){
    $array[] = $ar;
};

echo '<pre>';
var_dump($array);
echo '</pre>';

foreach ($array as $item){
    echo '<pre>';
    var_dump($item);
    echo '</pre>';
};

foreach ($array as $key => $value){
    echo '<pre>';
    var_dump("{$key} = {$value}");
    echo '</pre>';
};