<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);

//include "File.php";
//echo "<p> Continue</p>";

//include "header.php";
include __DIR__."/header.php";

$profile = new StdClass();
$profile->name = "Guilherme";
$profile->age = 18;
$profile->email = "Guilherme@gmail.com";
//echo "<pre>";
//var_dump($profile);
////echo "<pre>";
include __DIR__."/profile.php";

$profile = new StdClass();
$profile->name = "Shake";
$profile->age = 7;
$profile->email = "shake@gmail.com";
include_once __DIR__."/profile.php";

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);

//require "File.php";
//echo "<p> Continue</p>";

require __DIR__."/config.php";


echo "<h1>" . COURSE . "</h1>";

var_dump(require_once __DIR__."/config.php");