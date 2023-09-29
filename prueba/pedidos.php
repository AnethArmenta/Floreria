<?php
$conex = mysqli_connect("localhost", "root", "","formulario");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylepago.css">
</head>
<body>

    <header>
        <div class="menu container">
            <a href="#" class="logo">ANLU FLORERIA PEDIDOS</a>
            <input type="checkbox" id="menu" /> 
            <label for="menu">
            <img src="imagenes/m.png" class="menu-icono" alt="menu">
            </label>

            <nav class="navbar"> 
                <ul>
                    <li><a href="final.html">Inicio</a></li> 
                   
                </ul>
            </nav>
    </header>
</div>


<table border="1" class="table">
    <tr>
        <td class="etiquetas">nombre</td>
        <td class="etiquetas">telefono</td>
        <td class="etiquetas">dirección</td>
        <td class="etiquetas">fecha</td>
        <td class="etiquetas">hora</td>
        <td class="etiquetas">mensaje</td>
        <td class="etiquetas">editar</td>
        <td class="etiquetas">eliminar</td>
    </tr>
    <?php
    $sql="SELECT * from datos";
    $result=mysqli_query($conex, $sql);

    while($mostar=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $mostar['nombre']?></td>
        <td><?php echo $mostar['telefono']?></td>
        <td><?php echo $mostar['direccion']?></td>
        <td><?php echo $mostar['fecha']?></td>
        <td><?php echo $mostar['hora']?></td>
        <td><?php echo $mostar['mensaje']?></td>
        <td><a href="editar.php?id=<?php echo $mostar['id'] ?>" class="etiquetas">Editar</a></td>
        <td><a href="eliminar.php?id=<?php echo $mostar['id'] ?>" class="etiquetas">Eliminar</a></td>
        
    </tr>

    <?php
}
    ?>



</table>



<footer class="footer">
    <div class="footer-content container">

        <div class="link">
            <a href="#" class="logo">ANLU</a>
        </div>

       
    </div>
</footer>
</body>
</html>