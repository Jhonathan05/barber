<!DOCTYPE html>
<html lang="es">

<head>
    <title>Inicio</title>
    <?php
        include_once('layout/head.php');
    ?>

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
                        <!--<i class="glyphicon">--><i class="fas fa-sign-out-alt"></i> Salir
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
                    <h4>Inicio</h4>
                    
                    
                     <!--------------------------------------------------------------------Inicio Cuadro flotante----------------------------------------------------------------------------------->
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
                    <!--------------------------------------------------------------------Inicio Cuadro flotante----------------------------------------------------------------------------------->                                
                </div>
            </nav>
            <!---------------------------------Inicio Contenido principal. Por fuera del nav-header y del aside---------------------------------------------------------->
            <div class="contenido">
                <div class="row-1">
                    <div id="izquierda">
                        <div class="izquierda-titulo">
                            <span>
                               Información del Negocio
                           </span>
                        </div>
                        <div class="izquierda-contenido">
                            <div id="nombre-tienda">PruebaApp</div>
                            <div id="tipo-tienda">Otro</div>
                            <!--------------------------------------------------------------------Inicio Cuadro flotante----------------------------------------------------------------------------------->
                            <div id="cuadro-flotante">
                                <button class="btn-pop" onclick="document.getElementById('modal-wrapper').style.display='block'">
                                   Configuración de la tienda
                                </button>

                                <!------Inicio Contenido Cuadro flotante--->
                                <div id="modal-wrapper" class="modal">

                                    <form class="modal-content animate" action="">
                                        <div class="imgcontainer">
                                            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                            <div class="titulo-flot">
                                                Configuración de la Tienda
                                            </div>
                                        </div>

                                        <div class="flotante-container">
                                           <span class="marginb">
                                              <div class="titulo-campo">Nombre de la Tienda</div>
                                              <input type="text" placeholder="Nombre actual de la tienda" name="tienda-name" required>
                                           </span>
                                            
                                            <span class="marginb">
                                               <div class="titulo-campo">Tipo:</div>
                                               <input list="lista-tipos-tienda" name="l-tipos-t" placeholder="Tipo" required>
                                            </span>
                                            
                                            <datalist id="lista-tipos-tienda">
                                                <option value="Restaurante"></option>
                                                <option value="Salón de Belleza"></option>
                                                <option value="Grifo"></option>
                                                <option value="Spa"></option>
                                                <option value="Farmacia"></option>
                                                <option value="Lavandería"></option>
                                                <option value="Bar"></option>
                                                <option value="Otro"></option>
                                            </datalist>
                                            
                                            <div id="pais-moneda">
                                                <div id="row-pais">
                                                    <div class="titulo-campo">Pais</div>
                                                    <input list="lista-pais" name="l-pais" placeholder="País" required>
                                                    <datalist id="lista-pais">
                                                        <option value="Argentina"></option>
                                                        <option value="Bolivia"></option>
                                                        <option value="Chile"></option>
                                                        <option value="Colombia"></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                    </datalist>
                                                </div>
                                                <div id="row-moneda">
                                                    <div class="titulo-campo">Moneda</div>
                                                    <input list="lista-moneda" name="l-moneda" placeholder="Moneda" required>
                                                    <datalist id="lista-moneda">
                                                        <option value="USD - Dolar estadounidense"></option>
                                                        <option value="ARS - Peso argentino"></option>                                                       
                                                        <option value="BOB - boliviano"></option>
                                                        <option value="CLP - Peso chileno"></option>
                                                        <option value="COP - Peso colombiano"></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                        <option value=""></option>
                                                    </datalist>
                                                </div>
                                            </div>
                                            
                                            <div id="grup-equiva">
                                                <div class="titulo-campo"><strong>Equivalencia de Puntos</strong></div>
                                                
                                                <div class="horizontal m15">
                                                    <input type="checkbox">
                                                    <div class="texto-campo">Use la siguiente equivalencia para asignar puntos</div>
                                                </div>                        
                                                
                                                <div class="horizontal conf-eq-pun">
                                                    <input type="text" id="puntos">
                                                    <div class="texto-campo texto-campo-movil">Puntos =</div>
                                                    <input type="text" id="moneda">
                                                    <div class="texto-campo texto-campo-movil">COP - Peso colombiano</div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="footer-flot">
                                                <button class="btn-base" type="button" onclick="document.getElementById('modal-wrapper').style.display='none'">Cancelar</button>
                                                <button class="btn-base btn-guardar" type="submit">Guardar</button>
                                            </div>

                                    </form>

                                </div>
                                <!------Fin Contenido Cuadro flotante--->
                            </div>
                            <!--------------------------------------------------------------------Fin Cuadro flotante----------------------------------------------------------------------------------->

                        </div>
                    </div>
                    <div id="derecha">
                        <div id="derecha-imagen"><i class="fas fa-user-friends"></i></div>
                        <div id="derecha-derecha">
                            <div id="numero-clientes">
                                0
                            </div>
                            <div id="clientes">
                                Clientes
                            </div>
                        </div>
                    </div>
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
