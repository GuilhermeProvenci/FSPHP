<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");
echo "<pre>";
/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
  "name" => "Guilherme",
  "company" => "GPL",
  "mail" => "gui@gmail.com"
];
$objProfile = (object)$arrProfile;
//var_dump($arrProfile, $objProfile);

echo "<p> {$arrProfile['name']} trabalha na {$arrProfile['company']} </p>";
echo "<p> {$objProfile->name} trabalha na {$objProfile->company} </p>";

$ceo = $objProfile;
unset($ceo->company);
var_dump($ceo);

$company = new StdClass();
$company->company = "GPL";
$company->ceo = $ceo;
$company->manager = new StdClass();
$company->manager->name = "Shake";
$company->manager->mail = "Shake@gmail.com";

var_dump($company);


/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump([
    "class" => get_class($company),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent" => get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime")
]);

$exception = new PDOException();


echo " <h2>----------------EXCEPTION----------------</h2>";
var_dump([
    "class" => get_class($exception),
    "methods" => get_class_methods($exception),
    "vars" => get_object_vars($exception),
    "parent" => get_parent_class($exception),
    "subclass" => is_subclass_of($exception, "Exception")
]);


echo "</pre>";