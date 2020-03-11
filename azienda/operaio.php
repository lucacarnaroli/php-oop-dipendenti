<?php 
require_once 'dipendenti.php';

class Operaio extends Dipendente
{
    private $oreNotturno;
    public function __construct($_numMatricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban, $_oreNotturno)
    {
        parent::__construct($_numMatricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban);
        $this->oreNotturno = $_oreNotturno;
    }
}