<?php
    include("conexion.php");
    $valoruser=$_POST["Username"];
    $valorpass=$_POST["Pass"];

    $query=mysqli_query($bd,"SELECT Username, Pass from usuario;");

    $valido=false;

    while ($filas=mysqli_fetch_array($query)) {
        # query se convierte en un arreglo
        if($filas["Username"]==$valoruser && $filas["Pass"]==$valorpass){
            echo "USUARIO CORRECTO";
            $valido=true;
        }
    }
    if ($valido==false) {
        echo"no es correcto el usuario o contraseña";
    }
?>