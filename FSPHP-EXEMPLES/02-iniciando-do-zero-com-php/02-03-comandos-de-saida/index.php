<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p>Olá Mundo!", " ", "<span class='tag'> #BoraProgramar!</span>", "</p>";

$hello = "Olá Mundo!";
$code = "<span class='tag'> #boraProgramar!</span>";

echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = "dia";
echo "<p>Falta 1 $day para o evento!</p>";
echo "<p>Faltam 2 {$day}s para o evento!</p>";

echo "<h3>{$hello} </h3>";
echo "<h4>{$hello} {$code} </h4>";

echo '<h3>' . " " . $code . "</h3>";
?>
HTML
<H4><?= 'PHP fora do ?php >'  . " - - - - " . $code ?></H4>

<?php



/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print $hello;
print $code;

print "<h3> {hello} {$code}</h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$array = [
    "company" => "Gui Course",
    "couse" => "fsPHP",
    "class" => "comandos de saida"
];

//print $array;
print_r($array);
echo "<pre>", print_r($array, true), "</pre>"; //o true é para nao ter o 1 no final, pq ta dando return

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);


$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{hello} {code}";
$subtitle = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it 
to make a type specimen book. It has survived not only five centuries, but also the leap into electronic";

printf($article, $title, $subtitle);
echo sprintf($article, $title, $subtitle);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b></p></article>";
vprintf($company, $array);
echo vsprintf($company, $array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump(
        $array,
        $hello,
        $code
);
