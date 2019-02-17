<!DOCTYPE html>
<html lang="es">

<head>
    <title>Mi Perfil</title>
    <?php
        include_once('layout/head.php');
    ?>
        <link rel="stylesheet" href="css/perfil.css">


</head>

<body>
      
    <?php
        include('carga.php');
    ?>
    
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
                    <a href="#">
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
                    <h4>Mi Perfil</h4>
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
            
            <div class="contenido-perfil">
               
                <form action="">
                    <div class="titulo-campo">Nombre:</div>
                    <input type="text" class="input-base" placeholder="Nombre actual" requeried>
                    <div class="titulo-campo">Apellido:</div>
                    <input type="text" class="input-base" placeholder="Apellido actual" requeried>
                    <div class="titulo-campo">Email:</div>
                    <input type="email" class="input-base" placeholder="Email actual" requeried>
                    <div class="titulo-campo">Contraseña:</div>
                    <input type="password" class="input-base" placeholder="Contraseña Nueva" requeried>
                    <div class="titulo-campo">Repetir contraseña:</div>
                    <input type="password" class="input-base" placeholder="Repetir Contraseña Nueva" requeried>
                </form>
                <div class="foot">                    
                    <button class="btn-base btn-guardar" onclick="<script>alert('Esta seguro')</script>">Actualizar</button>
                </div>
                
                
            </div>
            
            
            
            
            
            
            <!---------------------------------Fin Contenido principal. Por fuera del nav-header y del aside---------------------------------------------------------->
        </div>
    </div>
</body>
<?php
    include_once('layout/scripts.php');
    ?>

</html>
