 <?php

//recuperamos los datos que bienen por el campo nombre
$NombreVendedor=$_POST['NombreVendedor'];
$Direccion=$_POST['Direccion'];
$telefono=$_POST['telefono'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];


if($NombreVendedor==''){ //si el campo esta en blanco mandamos el siguiente error
    header('Location: vende_nosotros.php?error=1');
    }elseif($Direccion==''){
    header('Location: vende_nosotros.php?error=2');
    }elseif($telefono==''){
    header('Location: vende_nosotros.php?error=3');
    }elseif($email1==''){
    header('Location: vende_nosotros.php?error=4');
    }elseif($email2==''){
    header('Location: vende_nosotros.php?error=5');
    }
    
    include 'registrar.php';
?>


