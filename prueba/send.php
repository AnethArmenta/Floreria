<?php

include("conexion.php");
if(isset($_POST['send'])){
    if(
      strlen($_POST['name']) >= 1 &&
      strlen($_POST['phone']) >= 1 &&
      strlen($_POST['direccion']) >= 1 &&
      strlen($_POST['date']) >= 1 &&
      strlen($_POST['hora']) >= 1 &&
      strlen($_POST['message']) >= 1 

    ) {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $direccion = trim($_POST['direccion']);
        $date = trim($_POST['date']);
        $hora = trim($_POST['hora']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO datos(nombre, telefono, direccion, fecha, hora, mensaje)
        VALUES ('$name', '$phone', '$direccion', '$date', '$hora', '$message')";
        $resutado = mysqli_query($conex, $consulta);

    }
}
?>