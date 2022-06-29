<?php
include_once 'conexion.php';
class reservaDAO{
    public function __construct(){
        $cn=new conexion();
    }

    function getReserva(){
        try{
            $obj=Conexion:: singleton();
            $data=$obj->prepare('SELECT * FROM reserva');
            $data->execute;
            return $data;
        }catch(Exception $e){
            throw $e;
        }
    }

    function insertarR($objRes){
        try{
            $obj=Conexion::singleton();
            $data=$obj->prepare('INSERT INTO reserva VALUES(null,?,?,?,?,?,?,?)');
            $data->bindParam(1,$objRes->getNombre());
            $data->bindParam(2,$objRes->getApellidoP());
            $data->bindParam(3,$objRes->getApellidoM());
            $data->bindParam(4,$objRes->getNumero());
            $data->bindParam(5,$objRes->getCorreo());
            $data->bindParam(6,$objRes->getEdad());
            $data->bindParam(7,$objRes->getCurso());
            $data->execute();

        }catch(Exception $e){
            throw $e->getMessage();
        }
    }
}
?>