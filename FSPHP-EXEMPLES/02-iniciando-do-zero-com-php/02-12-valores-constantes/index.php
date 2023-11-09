<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("COURSE", "Full Stack PHP");
const AUTHOR = "Guilherme";

$formation = true;
if($formation){
    define("COURSE_TYPE", "Formação");
} else
    define("COURSE_TYPE", "Curso");

echo "<p>", COURSE_TYPE, " ", COURSE , " de ", AUTHOR , "</p>";
echo "<p>". COURSE_TYPE. " ". COURSE . " de ". AUTHOR . "</p>";

class Config
{
    const USER = "root";
    const HOST = "localhost";
}

echo "<p>", Config::USER, "</p>";
echo "<p>", Config::HOST, "</p>";

echo "<pre>";
var_dump(get_defined_constants(true)["user"]);
echo "</pre>";


/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);
echo "<pre>";
var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);


function fullStackPHP(){
    return __FUNCTION__;
};

var_dump(fullStackPHP());

trait myTrait
{
    public $name = __TRAIT__;
}

class FsPhp{
    use myTrait;
    public $className = __CLASS__;
}
var_dump(new FsPhp());

require __DIR__."/MyClass.php";

var_dump(new \Sourse\MyClass());
var_dump(\Sourse\MyClass::class);

echo "</pre>";
