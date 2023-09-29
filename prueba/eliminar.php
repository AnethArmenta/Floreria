
<?php
$conex = mysqli_connect("localhost", "root", "","formulario");
?>

<?php
// Establece la conexión a la base de datos (reemplaza con tus propios datos)
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "formulario";

$conex = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verifica si se ha proporcionado un ID válido a través de la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Query para eliminar el registro con el ID especificado
    $sql = "DELETE FROM datos WHERE id = $id";

    if (mysqli_query($conex, $sql)) {
        echo '
        <script>
            alert("Registro eliminado");
            window.location = "pedidos.php";
        </script>
        ';



        //echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conex);
    }
} else {
    echo "ID no válido o no proporcionado.";
}

// Cierra la conexión a la base de datos
mysqli_close($conex);
?>
