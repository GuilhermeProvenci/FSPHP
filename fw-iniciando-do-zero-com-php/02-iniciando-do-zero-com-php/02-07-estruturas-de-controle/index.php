<?php
require __DIR__ . '/../../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = false;

if($test){
  var_dump(true);
}else {
    var_dump(false);
};

$age = 18;

if ($age < 20) {
    var_dump("Menor que 20");
} elseif ($age > 20 && $age < 50) {
    var_dump("Entre 20 e 50");
}else{
    var_dump("maior que 50");
};

$hour = 23;

if ($hour >= 5 || $hour < 23){
    if($hour < 7){
        var_dump("Bob Marley");
    }else{
        var_dump("Avendged Sevenfold");
    }
}else{
    var_dump("ZZzZzZz");
};

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

if(isset($rock)){
    var_dump("Rock N' Roll");
}else{
    var_dump("Die");
};

$rockAndRoll = "AcDc";
if(!empty($rockAndRoll)) {
    var_dump("Rock existe e toca {$rockAndRoll}");
}else{
    var_dump("Não existe ou nao está tocando");
};


/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "pending";
switch ($payment){
    case 'billet_printed':
        var_dump("Boleto Impresso");
        break;
    case 'canceled':
        var_dump("Pagamento cancelado");
        break;
    case 'past_due' :
    case 'pending' :
    var_dump("Aguardando Pagamento");
        break;
    case 'aproved':
    case 'completed':
    var_dump("Pagamento aprovado");
        break;
    default:
        var_dump("Erro ao processar");
        break;
}


