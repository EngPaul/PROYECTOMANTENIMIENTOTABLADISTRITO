<?php

class Provinciabean 
{
    public $CODREGION;
    public $CODPROVINCIA;
    public $NOMPROVINCIA;
    public $ESTADO;
    function getCODREGION() {
        return $this->CODREGION;
    }

    function getCODPROVINCIA() {
        return $this->CODPROVINCIA;
    }

    function getMONPROVINCIA() {
        return $this->MONPROVINCIA;
    }

    function getESTADO() {
        return $this->ESTADO;
    }

    function setCODREGION($CODREGION) {
        $this->CODREGION = $CODREGION;
    }

    function setCODPROVINCIA($CODPROVINCIA) {
        $this->CODPROVINCIA = $CODPROVINCIA;
    }

    function setMONPROVINCIA($MONPROVINCIA) {
        $this->MONPROVINCIA = $MONPROVINCIA;
    }

    function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }


    
    
}
