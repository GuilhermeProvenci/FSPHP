<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formulários e filtros");
echo "<pre>";
/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);

$form = new stdClass();
$form->name = "Um Nome";
$form->mail = "um@email.com";

var_dump($_REQUEST);

$form->method = "get";
$form->method = "post";
include __DIR__ . "/form.php";

/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

var_dump($_POST);

$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump([
  $post,
  $postArray
]);

if ($postArray) {
  if (in_array("", $postArray)) {
    echo "<p class='trigger warning'> Preencha todos os campos!</p>";
  } elseif (!filter_var($postArray['mail'], FILTER_VALIDATE_EMAIL)) {
    echo "<p class='trigger warning'> Email não válido!</p>";
  } else {
    $saveStrip = array_map("strip_tags", $postArray);
    $save = array_map("trim", $saveStrip);
    var_dump($save);
    echo "<p class='trigger accept'> Cadastro com successo!</p> ";
  }
}


$form->method = "post";
include __DIR__ . "/form.php";

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);


var_dump($_GET);
$get = filter_input(INPUT_GET, "mail", FILTER_DEFAULT);
$getArray = filter_input_array(INPUT_GET, FILTER_DEFAULT);

var_dump($getArray);


$form->method = "get";
include __DIR__ . "/form.php";


/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);


var_dump(
  filter_list(),
  [
    filter_id("validate_email"),
    FILTER_VALIDATE_EMAIL,
    filter_id("string"),
    FILTER_SANITIZE_STRING,
    filter_id("int"),
    FILTER_VALIDATE_INT,
    filter_id("float"),
    FILTER_VALIDATE_FLOAT,
  ]
);


$filterform = [
  "name" => FILTER_SANITIZE_STRIPPED,
  "mail" => FILTER_VALIDATE_EMAIL
];

$getForm = filter_input_array(INPUT_GET, $filterform);
var_dump($getForm);

$email = "guilherme@admin.com";
var_dump(
  [
    filter_var($email, FILTER_VALIDATE_EMAIL)
  ],
  filter_var_array($getForm, $filterform)
);

echo "</pre>";