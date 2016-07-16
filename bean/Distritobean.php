<?php

class Distritobean 
{
    public $CODREGION;
    public $CODPROVINCIA;
    public $CODDISTRITO;
    public $NOMDISTRITO;
    function getCODREGION() {
        return $this->CODREGION;
    }

    function getCODPROVINCIA() {
        return $this->CODPROVINCIA;
    }

    function getCODDISTRITO() {
        return $this->CODDISTRITO;
    }

    function getNOMDISTRITO() {
        return $this->NOMDISTRITO;
    }

    function setCODREGION($CODREGION) {
        $this->CODREGION = $CODREGION;
    }

    function setCODPROVINCIA($CODPROVINCIA) {
        $this->CODPROVINCIA = $CODPROVINCIA;
    }

    function setCODDISTRITO($CODDISTRITO) {
        $this->CODDISTRITO = $CODDISTRITO;
    }

    function setNOMDISTRITO($NOMDISTRITO) {
        $this->NOMDISTRITO = $NOMDISTRITO;
    }


}
