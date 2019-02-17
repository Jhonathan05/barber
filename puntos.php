<!DOCTYPE html>
<html lang="es">

<head>
    <title>Recompensas</title>
    <?php
        include_once('layout/head.php');
    ?>
        <link rel="stylesheet" href="css/puntos.css">


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
                                <i class="fas fa-bars"></i> <!--&#9776;-->
                            </button>
                    </div>
                    <h4>Recompensas</h4>
                    
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
            <div class="datagrid">
                <table class="table">
                    <thead>
                       <tr>
                         <!------------------------------------------Inicio Cuadro flotante Nueva Recompensa------------------------------------------------------------------>
                         <div id="cuadro-flotante">
                            <button class="btn-base btn-guardar btn-ver-mas marginb" onclick="document.getElementById('modal-wrapper-nr').style.display='block'">
                               Nueva Recompensa
                            </button>
                            <!------Inicio Contenido Cuadro flotante--->
                            <div id="modal-wrapper-nr" class="modal">
                                <div class="modal-content-nr animate">
                                    <div class="imgcontainer">
                                        <span onclick="document.getElementById('modal-wrapper-nr').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                        <div class="titulo-flot">
                                            Crear nueva Recompensa
                                        </div>
                                    </div>
                                    
                                    <div class="flotante-container marginb">
                                        <div>
                                            <div class="titulo-campo">Nombre de la recompensa:</div>
                                                <input type="text" placeholder="Escriba el nombre de la recompensa">
                                        </div>
                                        <div>
                                            <div class="titulo-campo">Puntos para el canje:</div>
                                                <input type="number" placeholder="00">
                                        </div>
                                        
                                        <div class="check-activo">                                                                           
                                            <label class="container">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                                <span class="text-check">Activo</span>
                                            </label>
                                        </div>                      
                                    </div>
                                                                                                                                   
                                    <div class="footer-flot">
                                        <button class="btn-base" type="button" onclick="document.getElementById('modal-wrapper-nr').style.display='none'">Cancelar</button>
                                        <button class="btn-base btn-guardar" type="submit">Crear</button>
                                    </div>
                                                                                                                          
                                </div>                                
                            </div>
                            <!------Fin Contenido Cuadro flotante--->
                         </div>
                       <!----------------------------------------------------------------Fin Cuadro flotante Nueva Recompensa----------------------------------------->
                       </tr>
                        <tr>
                            <th>Nombre</th>
                            <th>Puntos</th>
                            <th>Activo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PruebaEjemplo</td>
                            <td>50</td>
                            <td>Si</td>
                            <td>
                                <div class="horizontal">
                                    <!-------------------------------Inicio Cuadro flotante editar recompensa------------------------------------------------------------------>
                                    <div id="cuadro-flotante">
                                        <button class="btn-base btn-guardar btn-ver-mas" onclick="document.getElementById('modal-wrapper-er').style.display='block'">
                                           editar
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-er" class="modal">

                                            <div class="modal-content animate">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById('modal-wrapper-er').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                                    <div class="titulo-flot">
                                                        Editar Recompensa
                                                    </div>
                                                </div>

                                                <div class="flotante-container marginb">
                                                    <div>
                                                        <div class="titulo-campo">Nombre de la recompensa:</div>
                                                            <input type="text" placeholder="Escriba el nombre de la recompensa">
                                                    </div>
                                                    <div>
                                                        <div class="titulo-campo">Puntos para el canje:</div>
                                                            <input type="number" placeholder="00">
                                                    </div>

                                                    <div class="check-activo">                                                                           
                                                        <label class="container">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="checkmark"></span>
                                                            <span class="text-check">Activo</span>
                                                        </label>
                                                    </div>                      
                                                </div>
                                                                                                                                   
                                                <div class="footer-flot">
                                                    <button class="btn-base" type="button" onclick="document.getElementById('modal-wrapper-er').style.display='none'">Cancelar</button>
                                                    <button class="btn-base btn-guardar" type="submit">Crear</button>
                                                </div>
                                            </div>

                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
                                    <!--------------------------------Fin Cuadro flotante Editar Recompensa-------------------------------------------------------------------->
                                    
                                    <!--------------------------------Inicio Cuadro flotante Eliminar recompensa--------------------------------------------------------------> 
                                    <div id="cuadro-flotante">
                                       
                                        <button class="btn-eliminar-rojo rojo" onclick="document.getElementById('modal-wrapper-eliminar').style.display='block'">
                                           eliminar
                                        </button>
                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-eliminar" class="modal">

                                            <div class="modal-content-eliminar animate">
                                                <div class="imgcontainer-eliminar">
                                                   <div class="simbolo-pregunta"><i class="fas fa-question-circle"></i></div>
                                                    <div class="titulo-flot">
                                                        Eliminar Recompensa
                                                    </div>
                                                </div>

                                                <div class="flotante-container-eliminar">
                                                    <div class="texto-eliminar">
                                                        Est&aacute; seguro de eliminar la recompensa: "<strong>Prueba Ejemplo</strong>"
                                                    </div>

                                                    
                                                    <div class="footer-flot-eliminar">
                                                        <button class="btn-base" type="button" onclick="document.getElementById('modal-wrapper-eliminar').style.display='none'">Cancelar</button>
                                                        <button class="btn-base btn-guardar" type="submit">Si</button>
                                                    </div>
                                                </div>                                            
                                            </div>

                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
                                    <!--------------------------------Fin Cuadro flotante Eliminar recompensa--------------------------------------------------------------> 

                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>                        
                        </tr>
                    </tfoot>
                </table>
            </div>        
        </div>
        <!---------------------------------Fin Contenido principal. Por fuera del nav-header y del aside---------------------------------------------------------->
    </div>
</body>
<?php
    include_once('layout/scripts.php');
    ?>

</html>
