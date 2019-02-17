<!DOCTYPE html>
<html lang="es">

<head>
    <title>Titulo</title>
    <?php
        include_once('layout/head.php');
    ?>
        <link rel="stylesheet" href="css/alquecorresponda.css">


</head>

<body>

    
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>MAYLEZ</h3>
                <strong><i class="fas fa-bolt"></i></strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="inicio.php">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="clientes.php">
                        <i class="fas fa-users"></i> Clientes
                    </a>
                </li>
                <li>
                    <a href="puntos.php">
                        <i class="fas fa-trophy"></i> Puntos
                    </a>
                </li>
                <li>
                    <a href="personal.php">
                        <i class="fas fa-user-tie"></i> Personal
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-sign-out-alt"></i> Salir
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Sidebar Holder -->

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fas fa-bars"></i>
                            </button>
                    </div>
                    <h4>Titulo</h4>
                    <!--------------------------------------------------------------------Inicio Cuadro flotante--------------------------------------------------------------->
                            <div id="cuadro-flotante">
                                <button class="btn-pop-infouser" onclick="document.getElementById('modal-wrapper-infouser').style.display='block'">
                                   <i class="dropdown-user fas fa-user-circle"></i>
                                </button>

                                <!------Inicio Contenido Cuadro flotante--->
                                <div id="modal-wrapper-infouser" class="modal-infouser">
                                   <div class="modal-content-infouser">
                                       <div class="flotante-container-infouser">
                                           <div class="opcion"><a href="perfil.php">Mi perfil</a></div>
                                           <div class="opcion"><a href="">Cerrar Sesi&oacute;n</a></div>
                                       </div>
                                   </div>
                                </div>
                                <!------Fin Contenido Cuadro flotante--->
                                </div>
                    <!--------------------------------------------------------------------Fin Cuadro flotante--------------------------------------------------------------->       
                </div>
            </nav>
            <!---------------------------------Inicio Contenido principal. Por fuera del nav-header y del aside---------------------------------------------------------->
            
            
            
            
            
            
            
            
            <!---------------------------------Fin Contenido principal. Por fuera del nav-header y del aside---------------------------------------------------------->
        </div>
    </div>
</body>
<?php
    include_once('layout/scripts.php');
    ?>

</html>
