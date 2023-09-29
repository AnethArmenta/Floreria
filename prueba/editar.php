
<?php
$conex = mysqli_connect("localhost", "root", "","formulario");
?>
<?php
// Verificar si se ha enviado un ID válido para editar
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consulta para obtener los datos del registro a editar
    $sql = "SELECT * FROM datos WHERE id = $id";
    $result = mysqli_query($conex, $sql);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if (!$row) {
            echo "No se encontró el registro a editar.";
            exit;
        }
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($conex);
        exit;
    }
} else {
    echo "ID no válido para editar.";
    exit;
}

// Procesar el formulario de edición si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $mensaje = $_POST['mensaje'];

    // Consulta para actualizar el registro
    $sql = "UPDATE datos SET nombre='$nombre', telefono='$telefono', direccion='$direccion', fecha='$fecha', hora='$hora', mensaje='$mensaje' WHERE id = $id";

    if (mysqli_query($conex, $sql)) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conex);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="styleeditar.css">
    
    <link rel="stylesheet" href="stylepago.css">
</head>
<body>

<header class="header">
        <div class="menu container">
            <a href="#" class="logo">ANLU</a>
            <input type="checkbox" id="menu" /> 
            <label for="menu">
            <img src="imagenes/m.png" class="menu-icono" alt="menu">
            </label>

            <nav class="navbar"> 
                <ul>
                    <li><a href="pedidos.php">Regresar</a></li> 
                    <li><a href="index.php">Salir</a></li>
                    
                    
                </ul>
            </nav>
        </div>

    
    <form method="POST">
        <label for="nombre" class="etiqueta">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>

        <label for="telefono" class="etiqueta">Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br>

        <label for="direccion" class="etiqueta">Dirección:</label>
        <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>"><br>

        <label for="fecha" class="etiqueta">Fecha:</label>
        <input type="text" name="fecha" value="<?php echo $row['fecha']; ?>"><br>

        <label for="hora" class="etiqueta">Hora:</label>
        <input type="text" name="hora" value="<?php echo $row['hora']; ?>"><br>

        <label for="mensaje" class="etiqueta">Mensaje:</label>
        <textarea name="mensaje"><?php echo $row['mensaje']; ?></textarea><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
