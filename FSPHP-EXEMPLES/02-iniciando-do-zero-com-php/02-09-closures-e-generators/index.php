<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year){
    $age = date("Y") - $year;
    return "<p>Você tem {$age} anos</p>";
};

echo $myAge(2005);

$priceBrl = function ($price){
  return number_format($price, 2, ",",".");
};

echo "<p>O projeto custa R$ {$priceBrl(3600)}. Vamos fechar?";

$myCart = [];
$myCart["TotalPrice"] = 0;
$cartAdd = function ($item, $qtt, $price) use (&$myCart){
   $myCart[$item] =  $qtt * $price;
   $myCart["TotalPrice"] += $myCart[$item];
};

$cartAdd("HTMTL5", 1, 497);
$cartAdd("JQuery", 2, 497);
echo "<pre>";
var_dump($myCart, $cartAdd);
echo "</pre>";
/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

//como n fazer e como fazer
$iterator = 1;

function showDates($days){
  $saveDate = [];
  for($day = 1; $day < $days; $day++){
    $saveDate[] = date("d/m/y", strtotime("+1{$day}days"));
  }
  return $saveDate;
}


echo "<div style='text-align: center'>";
//foreach (showDates($iterator) as $date){
foreach (showDates(4) as $date){
    echo "<small class='tag'> {$date}</small>", PHP_EOL;
};
echo "</div>";

function generatorDates($days){
    for($day = 1; $day < $days; $day++){
        yield date("d/m/y", strtotime("+1{$day}days"));
    }
}

echo "<div style='text-align: center'>";
//foreach (showDates($iterator) as $date){
foreach (generatorDates($iterator) as $date){
    echo "<small class='tag'> {$date}</small>", PHP_EOL;
};
echo "</div>";