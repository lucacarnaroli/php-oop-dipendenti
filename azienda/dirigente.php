<?php
require 'dipendenti.php';

class Digirente extends Dipendente {
    private $azioni;
    private $bonus;

    public function setBonus($_bonus)
    {
        if(!is_numeric($_bonus)) {
            throw new Exception("Non è un numero");
        } else {
            $this->bonus = $_bonus;
        }    
    }
    public function getBonus() {
        return $this->bonus;
 }
}