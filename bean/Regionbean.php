<?php

class Regionbean 
{
    public $CODREGION; 
    public $NOMREGION;
    public $ESTADO;
    function getCODREGION() {
        return $this->CODREGION;
    }

    function getNOMREGION() {
        return $this->NOMREGION;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setCODREGION($CODREGION) {
        $this->CODREGION = $CODREGION;
    }

    function setNOMREGION($NOMREGION) {
        $this->NOMREGION = $NOMREGION;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }
    
}
