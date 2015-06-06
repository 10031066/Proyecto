 <?php

//recuperamos los datos que bienen por el campo nombre
$Nombre=$_POST['Nombre'];
$ApeMaterno=$_POST['ApeMaterno'];
$ApePaterno=$_POST['ApePaterno'];
$Dir=$_POST['Dir'];
$telefono=$_POST['telefono'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$edad=$_POST['edad'];

if($Nombre==''){ //si el campo esta en blanco mandamos el siguiente error
    header('Location: clientes.php?error=1');
    }elseif($ApeMaterno==''){
    header('Location: clientes.php?error=2');
    }elseif($ApePaterno==''){
    header('Location: clientes.php?error=3');
    }elseif($Dir==''){
    header('Location: clientes.php?error=4');
    }elseif($telefono==''){
    header('Location: clientes.php?error=5');
    }elseif($email1==''){
    header('Location: clientes.php?error=6');
    }elseif($email2==''){
    header('Location: clientes.php?error=7');
    }elseif($edad==''){
    header('Location: clientes.php?error=8');
    }
    
    include 'registrar.php';
?>


