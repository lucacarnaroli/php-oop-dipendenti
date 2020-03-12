<?php
require_once __DIR__ . '/classes/dipendenti.php';
require_once __DIR__ . '/classes/dirigente.php';
require_once __DIR__ . '/classes/operaio.php';

$luca = new Dirigente('12345', 'luca', 'carnaroli   ', 'via Roma', 'cbvnusahgan', 'it77sdvsadv31e31', 3);
var_dump($luca);

try {
    $luca->setBonus(5);
} catch (Exception $e) {
    echo 'errore' . $e->getMessage();
}
var_dump($luca);

echo $luca->getBonus();

// echo $luca->visualizzaDipendente();
var_dump($luca->visualizzaDipendente());

