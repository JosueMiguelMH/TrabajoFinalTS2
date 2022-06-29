<?php
class reserva{
    private $codigoC;
    private $nombreC;
    private $apellidoPC;
    private $apellidoMC;
    private $numeroC;
    private $correoC;
    private $edadC;
    private $cursoC;
    public function setCodigo($codigoC){
        $this->codigoC=$codigoC;
    }
    public function getCodigo(){
        return $this->codigoC;
    }

    public function setNombre($nombreC){
        $this->nombreC=$nombreC;
    }
    public function getNombre(){
        return $this->nombreC;
    }

    public function setApellidoP($apellidoPC){
        $this->apellidoPC=$apellidoPC;
    }
    public function getApellidoP(){
        return $this->apellidoPC;
    }

    public function setApellidoM($apellidoMC){
        $this->apellidoMC=$apellidoMC;
    }
    public function getApellidoM(){
        return $this->apellidoMC;
    }

    public function setNumero($numeroC){
        $this->numeroC=$numeroC;
    }

    public function getNumero(){
        return $this->numeroC;
    }

    public function setCorreo($correoC){
        $this->correoC=$correoC;
    }
    public function getCorreo(){
        return $this->correoC;
    }

    public function setEdad($edadC){
        $this->edadC=$edadC;
    }
    public function getEdad(){
        return $this->edadC;
    }

    public function setCurso($cursoC){
        $this->cursoC=$cursoC;

    }
    public function getCurso(){
        return $this->cursoC; 
    }
}

?>