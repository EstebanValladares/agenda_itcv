<?php
session_start();
if (!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["usuario"])) {
        $usuario =$_POST["usuario"];
        $password =$_POST["password"];
        $sql=$conexion->query(" select * from usuario where usuario='$usuario' and password='$password' ");
        if ($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombres;
            $_SESSION["apellido"]=$datos->apellidos;
            header("location: ../php/calendarioEstudiantes.php");
        }else{
            echo '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1">Usuario o contrasena incorrectos</div>';
        }
    }else{
        echo  '<div class="bg-red-200 w-full border-2 border-red-300 rounded-sm text-gray-500 mt-5 p-1" >Campos vacios</div>';
    }
    
}

?>