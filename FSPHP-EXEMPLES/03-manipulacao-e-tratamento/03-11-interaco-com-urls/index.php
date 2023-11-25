<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.11 - Interação com URLs");
echo "<pre>";
/*
 * [ argumentos ] ?[&[&][&]]
 */
fullStackPHPClassSession("argumentos", __LINE__);


echo "<h1><a href='index.php'> Clear </a> </h1>";
echo "<p><a href='index.php?arg1=true&arg2=true'>Argumentos</a></p>";


$data = [
  "name" => "Guilherme",
  "company" => "Gpl",
  "email" => "guilherme@gmail.com"
];

$arguments = http_build_query($data);
echo "<p><a href='index.php?{$arguments}'> Args By Array</a></p>";

var_dump($_GET);

$object = (object) $data;
var_dump(
  $object,
  http_build_query($object)
);


/*
 * [ segurança ] get | strip | filters | validation
 * [ filter list ] https://php.net/manual/en/filter.filters.php
 */
fullStackPHPClassSession("segurança", __LINE__);


$dataFilter = http_build_query([
  "name" => "Guilherme",
  "company" => "Gpl",
  "mail" => "guilherme@gmail.com",
  "site" => "GPL.com.br",
  "script" => "<script>alert('Esse é um JavaScritp')</script>"
]);

echo "<p><a href='index.php?{$dataFilter}'>DataFilter</a></p>";

$dataUrl = filter_input_array(INPUT_GET, FILTER_DEFAULT);

if ($dataUrl) {
  if (in_array("", $dataUrl)) {
    echo "<p class='trigger warning'>Faltam Dados</p>";
  } elseif (empty($dataUrl["mail"])) {
    echo "<p class='trigger warning'>Falta o E-mail</p>";
  } elseif (!filter_var($dataUrl["mail"], FILTER_VALIDATE_EMAIL)) {
    echo "<p class='trigger warning'>E-mail inválido</p>";
  } else {
    echo "<p class='trigger accept'>Tudo Certo</p>";
  }
} else {
  var_dump(false);
}

var_dump($dataUrl);


$dataFilter = http_build_query([
  "name" => "Guilherme",
  "company" => "Gpl",
  "mail" => "guilherme@gmail.com",
  "site" => "http://GPL.com.br",
  "script" => "<script>alert('Esse é um JavaScritp')</script>"
]);

parse_str($dataFilter, $arrDataFilter);
var_dump($arrDataFilter);


$dataPreFilter = [
  "name" => FILTER_SANITIZE_STRING,
  "company" => FILTER_SANITIZE_STRING,
  "mail" => FILTER_VALIDATE_EMAIL,
  "site" => FILTER_VALIDATE_DOMAIN,
  "script" => FILTER_SANITIZE_STRING
];


var_dump(filter_var_array($arrDataFilter, $dataPreFilter));

echo "</pre>";