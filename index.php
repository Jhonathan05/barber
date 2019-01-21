<!DOCTYPE html>
<html lang="es">

<head>
    <title>Iniciar Sesi&oacute;n</title>
    <?php
        include_once('layout/head.php');
    ?>
        <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="contenedor">
        <div class="contenido-login">
            <form action="">
                <div class="titulo-login">MAYLEZ</div>
                <div class="strong-form">
                    <input class="input-base" type="email" placeholder="Email" required>
                    <input class="input-base" type="password" placeholder="Contraseña" required>
                    <button type="submit" class="btn-base btn-guardar">Ingresar</button>
                </div>
                <a href="inicio.php"><div class="footer-form"><button type="button" class="btn-base base">Problemas prro? ve a inicio ;)</button></div></a>
            </form>
        </div>

    </div>
</body>
</html>
