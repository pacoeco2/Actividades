<?php
    include("conexion.php");
    $valoruser=$_POST["Username"];
    $valorpass=$_POST["Pass"];
    $valoremail=$_POST["Email"]:

    $query=mysqli_query($bd,"INSERT INTO `usuario` (`ID`, `Username`, `Pass`, `Email`) VALUES (NULL, $valoruser, $valorpass, $valoremail);");

    

?>