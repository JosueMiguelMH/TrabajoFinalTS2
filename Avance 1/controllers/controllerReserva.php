<?php
include("../models/reservaDAO.php");
include("../models/reserva.php");
class reservaController{

     function registrarReserva($nom,$apP,$apM,$numC, $cor, $edada, $cur){
        $obj = new reservaDAO();
        $objCur=new reserva();
        $objCur->setNombre($nom);
        $objCur->setApellidoP($apP);
        $objCur->setApellidoM($apM);
        $objCur->setNumero($numC);
        $objCur->setCorreo($cor);
        $objCur->setEdad($edada);
        $objCur->setCurso($cur);
        $obj->insertarR($objCur);
        header("Location: ../index.php");
     }
     

}
?>