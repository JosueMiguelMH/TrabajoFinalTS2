<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//styles/contactenos.css" type="text/css">
    <title>Document</title>
</head>
<body>
<?php
    include("../controllers/contactenosController.php");
    if(isset($_POST['btnRegistrar'])){
        $NomCli=$_POST['txtNomCli'];
        $ApeCli=$_POST['txtApeCli'];
        $CorCli=$_POST['txtCorCli'];
        $TelCli=$_POST['txtTelCli'];
        $objC=new contactenosController();
        $objC->registrarCliente($NomCli,$ApeCli,$CorCli,$TelCli);
    }else{
        ?>
    <h1></h1>

    <div><h2>INNOVATEC</h2></div>

    <div><a href="../index.php" class="posicionMenu">Menú Principal</a></div>

    <div class="flex-container">
        <form class="form" method="post" action="frmInsertar.php">
            <div class="form_section">
                <p align="left">Nombre :<p><input type="text" name="txtNomCli" class="form_input" placeholder="Escriba su nombre">
            </div>
            <div class="form_section">
                <p align="left">Apellidos :<p><input type="text" name="txtApeCli" class="form_input" placeholder="Escriba su apellido completo">
                
            </div>
            <div class="form_section">
                <p align="left"> Correo :<p><input type="email" name="txtCorCli" class="form_input" placeholder="Correo electrónico">
                
            </div>
            <div class="form_section">
                <p align="left"> Teléfono :<p><input type="number" name="txtTelCli" class="form_input" placeholder="Escriba su telefono">
                
            </div>
            <input class="checkbox" type="checkbox" name="">Acepta las condiciones
            <input class="enviar" type="submit" name="btnRegistrar" value="Enviar">
            <input class="limpiar" type="reset" value="Limpiar">
        </form>
        <div class="form-img">
            <div class="img-container">
                <div>
                    <img src="..//imagenes/imgContac.jpg">
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>