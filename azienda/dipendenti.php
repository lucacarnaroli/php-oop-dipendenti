<?php

class Dipendente 
{
    private $numMatricola;
    private $nome;
    private $cognome;
    private $indirizzo;
    private $iban;
    private $cf;

    public function __construct($_numMatricola,$_nome,$_cognome,$_indirizzo,$_iban,$_cf)
    {
        $this->numMatricola = $_numMatricola;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->indirizzo = $_indirizzo;
        $this->iban = $_iban;
        $this->cf = $_cf;
    }
    public function viewDipendente(){
        $result = [
            'Numero Matricola'=> $this->numMatricola,   
            'Nome'=> $this->nome,
            'Cognome'=> $this->cognome,
            'Indirizzo'=> $this->indirizzo,
            'Iban'=> $this->iban,
            'Codice Fiscale'=> $this->cf
        ];
    }
}
