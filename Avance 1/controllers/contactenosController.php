<?php
include("../models/contactenosDAO.php");
include("../models/contactenos.php");
class contactenosController{

    function registrarCliente($NomCli,$ApeCli,$CorCli,$TelCli){
        $obj=new contactenosDAO();
        $objCli=new cliente();
        $objCli->setNomCli($NomCli);
        $objCli->setApeCli($ApeCli);
        $objCli->setCorCli($CorCli);
        $objCli->setTelCli($TelCli);
        $obj->insertar($objCli);
        header("Location: ../index.php");
    }     
    
}
?>