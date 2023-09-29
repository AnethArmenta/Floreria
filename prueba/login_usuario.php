<?php
include('conexion.php');

$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
$validar_login = mysqli_query($conex, "SELECT * FROM login WHERE correo='$correo' AND contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) == 1){
    header("location: final.html");
    exit;

}else{
    echo '
    <script>
        alert("Usuario no existente");
        window.location = "index.php";
    </script>
    ';
    exit;
}



?>