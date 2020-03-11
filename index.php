<?php
require_once __DIR__ . '/azienda/dipendenti.php';
require_once __DIR__ . '/azienda/dirigente.php';
require_once __DIR__ . '/azienda/operaio.php';

$luca = new Dirigente('12345', 'Luca', 'Carnaroli', 'via Roma', 'cbvnusahgan', 'it77sdvsadv31e31');
var_dump($luca);

try {
    $luca->setBonus(5);
} catch (Exception $e) {
    echo 'errore' . $e->getMessage();
}
var_dump($luca);

echo $luca->getBonus();

echo $luca->viewDipendente();


var_dump($luca->viewDipendente());
