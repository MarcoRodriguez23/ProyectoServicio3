<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/build/img/hatchback.webp" type="image/x-icon">
    <link rel="stylesheet" href="/build/css/app.css">
    <title>Venta de automóviles</title>
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <a href="#" class="logotipo">
                <img  src="" alt="Logotipo">
            </a>
            <!-- <div class="mobile-menu">
                <img src="build/img/barras.svg" alt="icono-responsive">
            </div> -->
            <nav class="navegacion">
                <a href="#">Registra una concesionaria</a>
                <a href="#">Compra un auto</a>
                <a href="#">Vende tu auto</a>
            </nav>
        </div> <!--.barra-->
    </header>
    
    <?php
        echo $contenido;
    ?>

    <footer class="footer">
        <p>Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>
    </footer>
</body>
<script src="/build/js/bundle.js"></script>
</html>