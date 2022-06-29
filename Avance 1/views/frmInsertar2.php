<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//styles/disenio2.css" type="text/css">
    <title>Document</title>
</head>
<body>
<?php
    include("../controllers/controllerReserva.php");
    if(isset($_POST['btnRegistrar'])){
        $nomCli=$_POST['txtname'];
        $ApPCli=$_POST['txtapellP'];
        $ApMCli=$_POST['txtapP'];
        $numb=$_POST['txtTFn'];
        $CorreCli=$_POST['txtcorrE'];
        $edad=$_POST['txtedad'];
        $cursoL=$_POST['txtCursSel'];

        $objC=new reservaController();
        $objC->registrarReserva($nomCli,$ApPCli,$ApMCli,$numb, $CorreCli, $edad, $cursoL);
        
    }else{
        ?>
            
    <form method="POST" action="frmInsertar2.php" class="form-register">
        <H4>Reservar curso</H4>
        <label for="1nfr">Nombre: </label>
        <input class="controls" type="text" id="1nfr" name="txtname" placeholder="Escriba su nombre">

        <label for="2nfr">Apellido paterno: </label>
        <input class="controls" type="text" id="2apfr" name="txtapellP" placeholder="Escriba su apellido">

        <label for="3nfr">Apellido materno: </label>
        <input class="controls" type="text" id="3nfr" name="txtapP" placeholder="Escriba su apellido">

        <label for="9nfr">Teléfono : </label>
        <input class="controls" type="text" id="9nfr" name="txtTFn" placeholder="Escriba su numero">

        <label for="4nfr">Correo electrónico: </label>
        <input class="controls" type="email" id="4nfr" name="txtcorrE" placeholder="Correo">

        <label for="5nfr">Edad: </label>
        <input class="controls" type="number" id="5nfr" name="txtedad" placeholder="Escriba su edad">

        <p>Seleccione curso</p>
        <select name="txtCursSel" class="controls" id="tcursSelecRes">
            <option value="1" selected>Ensamblaje de Pc's</option>
            <option value="2">Programación en Java</option>
            <option value="3">Curso de php</option>
            <option value="4">Excel básico</option>

        </select>

        <input class="botons" type="submit" name='btnRegistrar' value="Reservar">





    <?php
        }
    ?>
</body>
</html>