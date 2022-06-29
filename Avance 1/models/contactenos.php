<?php
class cliente{
    private $id;
    private $NomCli;
    private $ApeCli;
    private $CorCli;
    private $TelCli;

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNomCli($NomCli){
        $this->NomCli=$NomCli;
    }
    public function getNomCli(){
        return $this->NomCli;
    }
    public function setApeCli($ApeCli){
        $this->ApeCli=$ApeCli;
    }
    public function getApeCli(){
        return $this->ApeCli;
    }
    public function setCorCli($CorCli){
        $this->CorCli=$CorCli;
    }
    public function getCorCli(){
        return $this->CorCli;
    }
    public function setTelCli($TelCli){
        $this->TelCli=$TelCli;
    }
    public function getTelCli(){
        return $this->TelCli;
    }
}

?>