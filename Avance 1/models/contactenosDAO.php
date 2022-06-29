<?php
include_once 'conexion.php';
class contactenosDAO{

public function __construct(){
    $cn=new conexion();
}
    function getCliente(){
        try{
        $obj=Conexion::singleton();
        $data=$obj->prepare('SELECT * FROM cliente');
        $data->execute();
        return $data;
        }catch(Exception $e){
            throw $e;
        }
    }
    function insertar($objCli){
    try {
        $obj=Conexion::singleton();
        $data=$obj->prepare('INSERT INTO cliente VALUES(null,?,?,?,?)');
        $data->bindParam(1,$objCli->getNomCli());
        $data->bindParam(2,$objCli->getApeCli());
        $data->bindParam(3,$objCli->getCorCli());
        $data->bindParam(4,$objCli->getTelCli());
        $data->execute();
    } catch (Exception $e) {
        throw $e->getMessage();
    }
    }
}
?>