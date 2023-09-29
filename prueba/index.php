<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="inicio.html">Iniciar sesión</a></li> 
                    <li><a href="cobertura.html">Cobertura</a></li>
                    <li><a href="pago.html">Formas de pago</a></li>
                    
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>anlu floreria</h1>
                <p>
                    Enviar Flores en ANLU es muy fácil y seguro, 
                    nuestra plataforma facilita absolutamente todo para que tu detalle llegue a la persona que amas,
                    somos la florería en CDMX más confiable por nuestras entregas puntuales, 
                    tenemos el arreglo perfecto para tu persona favorita, con nuestras flores a domicilio entregamos el mismo día sin complicaciones.
                
                </p>
                <a href="#forms" class="btn-1">¡Realiza tu pedido hoy!</a> 
            </div>
            <div class="header-img"> 
                <img src="imagenes/flor3.png" alt="">
            </div>
        </div>

    </header>

<main class="products container">
    <h2>CATÁLOGO</h2>

    <div class="box-container" id="lista-1">

        <div class="box">
            <img src="imagenes/r1.jpg" alt="">
            <div class="product-txt">
                <h3>baby rose</h3>
                <p>Ramo de rosas y Claveles</p>
                <p class="precio">$356</p>
                
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r2.jpg" alt="">
            <div class="product-txt">
                <h3>astro</h3>
                <p>Ramo de rosas naranjas, Gerberas y Astromelias</p>
                <p class="precio">$390</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r3.png" alt="">
            <div class="product-txt">
                <h3>jardin floral</h3>
                <p>Ramo de Girasoles y Claveles</p>
                <p class="precio">$430</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r4.jpeg" alt="">
            <div class="product-txt">
                <h3>Ramo amor</h3>
                <p>50 Rosas en 2 tonos, rojo y rosa</p>
                <p class="precio">$270</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r5.jpg" alt="">
            <div class="product-txt">
                <h3>Notas moradas</h3>
                <p>Mini box de rosas y Claveles </p>
                <p class="precio">$330</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r13.jpg" alt="">
            <div class="product-txt">
                <h3>lindura</h3>
                <p>Ramo con 20 tulipanes en tonos lila, rosa y blanco</p>
                <p class="precio">$499</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r7.jpg" alt="">
            <div class="product-txt">
                <h3>encanto</h3>
                <p>Canasta de flores mix</p>
                <p class="precio">$398</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r8.jpg" alt="">
            <div class="product-txt">
                <h3>happy</h3>
                <p>Arreglo floral con Rosas en tono rosa y amarillo</p>
                <p class="precio">$299</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r9.jpg" alt="">
            <div class="product-txt">
                <h3>baby color</h3>
                <p>Ramo con 10 tallos, rosas, nube y claveles en tonos baby</p>
                <p class="precio">$345</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r10.jpg" alt="">
            <div class="product-txt">
                <h3>yellow</h3>
                <p>Ramo de  12 girasoles  y eucalipto dólar</p>
                <p class="precio">$499</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r11.jpg" alt="">
            <div class="product-txt">
                <h3>amor</h3>
                <p>Ramo con 10 Gerberas en color rosa</p>
                <p class="precio">$378</p>
            </div>
        </div>

        <div class="box">
            <img src="imagenes/r12.jpg" alt="">
            <div class="product-txt">
                <h3>Motivos</h3>
                <p>Ramo con 8 lilis en 2 tonos, rosa y blanco</p>
                <p class="precio">$465</p>
            </div>
        </div>

    </div>

   

  

</main>
    <section class="formulario container" id="forms">

        <form method="post" autocomplete="off">

            <h2>Haz tu pedido</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre del producto">
                    <i class="fa-solid fa-shopping-cart"></i>
                </div>

                <div class="input-container">
                    <input type="number" name="phone" placeholder="Cantidad">
                    <i class="fas fa-chart-bar"></i>
                </div>

                <div class="input-container">
                    <input type="text" name="direccion" placeholder="Dirección del envio">
                    <i class="fas fa-map-marker"></i>

                </div>
                
                <div class="input-container">
                    <input type="date" name="date" placeholder="Fecha de envio (DD/MM/AAAA)">
                    <i class="fa-solid fa-calendar"></i>
                </div>

                <div class="input-container">
                    <input type="time" name="hora" placeholder="Hora de envio">
                    <i class="fas fa-clock"></i>

                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Mensaje para el destinatari@"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onClick="myFunction()">

            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">ANLU</a>
            </div>

            <div class="link">
                <ul>
                    <li> <a href="#">Politicas de envio</a></li>
                    <li> <a href="#">Preguntas frecuentes</a></li>
                    <li> <a href="#">Términos y condiciones</a></li>
                  
                </ul>            
            </div>
        </div>
    </footer>

    <?php
     include("send.php");
    ?>

    <script>
        function myFunction(){
            window.location.href="http://localhost/prueba"
        }
    </script>
</body>
</html>