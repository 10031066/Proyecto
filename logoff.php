<?php
session_start();
echo "Adios ".$_SESSION['NomUser'];

session_destroy();

?>
