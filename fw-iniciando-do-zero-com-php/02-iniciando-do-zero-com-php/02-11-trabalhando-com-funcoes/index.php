<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__ ."/functions.php";
echo '<pre>';
var_dump(functionName("argumento 1", "argumento 2","argumento3"));
echo '</pre>';
echo '<pre>';
var_dump(functionName("argumento 4", "argumento 5","argumento6"));
echo '</pre>';


echo '<pre>';
var_dump(optionArgus("argumento 4"));
echo '</pre>';

echo '<pre>';
var_dump(optionArgus("argumento 4", "argumento 5"));
echo '</pre>';

echo '<pre>';
var_dump(optionArgus("argumento 4", "argumento 5","argumento6"));
echo '</pre>';
/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 75;
$height = 1.70;
echo calcImc();


/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(300);
echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);
echo '<pre>';
var_dump(myTeam("Guilherme", "Lanna"));
echo '</pre>';