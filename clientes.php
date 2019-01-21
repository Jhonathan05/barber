<!DOCTYPE html>
<html lang="es">

<head>
    <title>Clientes</title>
    <?php
        include_once('layout/head.php');
    ?>
        <link rel="stylesheet" href="css/clientes.css">


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
                    <h4>Clientes</h4>
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
            <div class="datagrid">
              <!------------------------------------------Inicio Cuadro flotante Nuevo Cliente------------------------------------------------------------------>
              <div id="cuadro-flotante">
                  <button class="btn-base btn-guardar btn-ver-mas marginb" onclick="document.getElementById('modal-wrapper-nc').style.display='block'">
                      Nuevo Cliente
                  </button>
                      <!------Inicio Contenido Cuadro flotante--->
                      <div id="modal-wrapper-nc" class="modal">
                          <div class="modal-content-nc animate">
                              <div class="imgcontainer">
                                  <span onclick="document.getElementById('modal-wrapper-nc').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                  <div class="titulo-flot">
                                      Crear nuevo Cliente
                                  </div>
                              </div>

                              <div class="flotante-container marginb">
                                 <form action="">
                                     <div class="marginb">
                                          <div class="titulo-campo marginb">Nombre:</div>
                                          <input type="text" placeholder="Nombre">
                                      </div>
                                      <div class="marginb">
                                          <div class="titulo-campo marginb">Apellido:</div>
                                          <input type="text" placeholder="Apellido">
                                      </div>
                                      <div class="marginb">
                                          <div class="titulo-campo marginb">N&uacute;mero de documento:</div>
                                          <input type="number" placeholder="Documento">
                                      </div>
                                      <div class="marginb">
                                          <div class="titulo-campo marginb">N&uacute;mero de Celular:</div>
                                          <input type="number" placeholder="Apellido">
                                      </div>
                                      <div class="marginb">
                                          <div class="titulo-campo marginb">Email:</div>
                                          <input type="email" placeholder="Apellido">
                                      </div>
                                      <div class="marginb">
                                          <div class="titulo-campo marginb">Fecha de Nacimiento:</div>
                                          <input type="date" placeholder="Apellido">
                                      </div>                                      
                                 </form>                                                                   
                              </div>

                              <div class="footer-flot">
                                  <button class="btn-base" type="button" onclick="document.getElementById('modal-wrapper-nc').style.display='none'">Cancelar</button>
                                  <button class="btn-base btn-guardar" type="submit">Crear</button>
                              </div>                                                                                                                          
                          </div>                                
                      </div>
                            <!------Fin Contenido Cuadro flotante--->
              </div>
              <!----------------------------------------------------------------Fin Cuadro flotante Nuevo Cliente----------------------------------------->
              <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Puntos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jhonathan</td>
                            <td>Camargo</td>
                            <td>25</td>
                            <td>
                                <div class="horizontal">
                                    <!--------------------------------------------------------------------Inicio Cuadro flotante----------------------------------------------------------------------------------->
                                    <div id="cuadro-flotante">
                                        <button class="btn-base btn-guardar btn-ver-mas" onclick="document.getElementById('modal-wrapper').style.display='block'">
                                           ver más
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper" class="modal">

                                            <div class="modal-content animate">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                                    <div class="titulo-flot">
                                                        Informaci&oacute;n del Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container">
                                                    <span>
                                                         <div class="titulo-campo nombre-cliente">Jhonathan Camargo</div>
                                                         <div class="texto-campo">Puntos acumulados: <strong><span>25</span></strong></div>
                                                    </span>
                                                    <div class="marginb">
                                                        <div class="actividad">
                                                            Actividad
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-green"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han acumulado <span>25</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-red"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han canjeado <span>100</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>                                            
                                                </div>
                                                

                                            </div>

                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
    <!--------------------------------------------------------------------Fin Cuadro flotante----------------------------------------------------------------------------------->
                                    
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
                                                        Eliminar Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container-eliminar">
                                                    <div class="texto-eliminar">
                                                        Se eliminar&aacute;n todos los puntos acumulados de <span>Jhonathan Camargo</span>. Est&aacute; seguro de eliminar la informaci&oacute;n del cliente?
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
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Julian</td>
                            <td>Emilio</td>
                            <td>30</td>
                            <td>
                                <div class="horizontal">
                                    <!--------------------------------------------------------------------Inicio Cuadro flotante----------------------------------------------------------------------------------->
                                    <div id="cuadro-flotante">
                                        <button class="btn-base btn-guardar btn-ver-mas" onclick="document.getElementById('modal-wrapper-2').style.display='block'">
                                           ver más
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-2" class="modal">

                                            <div class="modal-content animate">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById('modal-wrapper-2').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                                    <div class="titulo-flot">
                                                        Informaci&oacute;n del Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container">
                                                    <span>
                                                         <div class="titulo-campo nombre-cliente">Julian Emilio</div>
                                                         <div class="texto-campo">Puntos acumulados: <strong>30</strong></div>
                                                    </span>
                                                    <div class="marginb">
                                                        <div class="actividad">
                                                            Actividad
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-green"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han acumulado <span>25</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-red"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han canjeado <span>100</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
    <!--------------------------------------------------------------------Fin Cuadro flotante----------------------------------------------------------------------------------->
                                    
                                    <div id="cuadro-flotante">
                                        <button class="btn-eliminar-rojo rojo" onclick="document.getElementById('modal-wrapper-eliminar2').style.display='block'">
                                           eliminar
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-eliminar2" class="modal">

                                            <div class="modal-content-eliminar animate">
                                                <div class="imgcontainer-eliminar">
                                                   <div class="simbolo-pregunta"><i class="fas fa-question-circle"></i></div>
                                                    <div class="titulo-flot">
                                                        Eliminar Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container-eliminar">
                                                    <div class="texto-eliminar">
                                                        Se eliminar&aacute;n todos los puntos acumulados de <span>Julian Emilio</span>. Est&aacute; seguro de eliminar la informaci&oacute;n del cliente?
                                                    </div>

                                                    
                                                    <div class="footer-flot-eliminar">
                                                        <button class="btn-base" type="button" onclick="document.getElementById('modal-wrapper-eliminar2').style.display='none'">Cancelar</button>
                                                        <button class="btn-base btn-guardar" type="submit">Si</button>
                                                    </div>
                                                </div>                                            
                                            </div>

                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                           <td>Ernesto</td>
                           <td>Arnulfo</td>
                           <td>100</td>
                           <td>
                               <div class="horizontal">
                                    <!--------------------------------------------------------------------Inicio Cuadro flotante----------------------------------------------------------------------------------->
                                    <div id="cuadro-flotante">
                                        <button class="btn-base btn-guardar btn-ver-mas" onclick="document.getElementById('modal-wrapper-3').style.display='block'">
                                           ver más
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-3" class="modal">

                                            <div class="modal-content animate">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById('modal-wrapper-3').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                                    <div class="titulo-flot">
                                                        Informaci&oacute;n del Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container">
                                                    <span>
                                                         <div class="titulo-campo nombre-cliente">Ernesto Arnulfo</div>
                                                         <div class="texto-campo">Puntos acumulados: <strong><span>100</span></strong></div>
                                                    </span>
                                                    <div class="marginb">
                                                        <div class="actividad">
                                                            Actividad
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-green"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han acumulado <span>25</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-red"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han canjeado <span>100</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
    <!--------------------------------------------------------------------Fin Cuadro flotante----------------------------------------------------------------------------------->
                                    
                                    <div id="cuadro-flotante">
                                        <button class="btn-eliminar-rojo rojo" onclick="document.getElementById('modal-wrapper-eliminar3').style.display='block'">
                                           eliminar
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-eliminar3" class="modal">

                                            <div class="modal-content-eliminar animate">
                                                <div class="imgcontainer-eliminar">
                                                   <div class="simbolo-pregunta"><i class="fas fa-question-circle"></i></div>
                                                    <div class="titulo-flot">
                                                        Eliminar Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container-eliminar">
                                                    <div class="texto-eliminar">
                                                        Se eliminar&aacute;n todos los puntos acumulados de <span>Ernesto Arnulfo</span>. Est&aacute; seguro de eliminar la informaci&oacute;n del cliente?
                                                    </div>

                                                    
                                                    <div class="footer-flot-eliminar">
                                                        <button class="btn-base" type="button" onclick="document.getElementById('modal-wrapper-eliminar3').style.display='none'">Cancelar</button>
                                                        <button class="btn-base btn-guardar" type="submit">Si</button>
                                                    </div>
                                                </div>                                            
                                            </div>

                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
                                </div>
                            </td>
                        </tr>                                                
                        <tr>
                            <td>Paquidermo</td>
                            <td>Riquencio</td>
                            <td>500</td>
                            <td>
                                <div class="horizontal">
                                    <!--------------------------------------------------------------------Inicio Cuadro flotante----------------------------------------------------------------------------------->
                                    <div id="cuadro-flotante">
                                        <button class="btn-base btn-guardar btn-ver-mas" onclick="document.getElementById('modal-wrapper-4').style.display='block'">
                                           ver más
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-4" class="modal">

                                            <div class="modal-content animate">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById('modal-wrapper-4').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                                    <div class="titulo-flot">
                                                        Informaci&oacute;n del Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container">
                                                    <span>
                                                         <div class="titulo-campo nombre-cliente">Paquidermo Riquencio</div>
                                                         <div class="texto-campo">Puntos acumulados: <strong><span>500</span></strong></div>
                                                    </span>
                                                    <div class="marginb">
                                                        <div class="actividad">
                                                            Actividad
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-green"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han acumulado <span>25</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-red"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han canjeado <span>100</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
    <!--------------------------------------------------------------------Fin Cuadro flotante----------------------------------------------------------------------------------->
                                    
                                    <div id="cuadro-flotante">
                                        <button class="btn-eliminar-rojo rojo" onclick="document.getElementById('modal-wrapper-eliminar4').style.display='block'">
                                           eliminar
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-eliminar4" class="modal">

                                            <div class="modal-content-eliminar animate">
                                                <div class="imgcontainer-eliminar">
                                                   <div class="simbolo-pregunta"><i class="fas fa-question-circle"></i></div>
                                                    <div class="titulo-flot">
                                                        Eliminar Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container-eliminar">
                                                    <div class="texto-eliminar">
                                                        Se eliminar&aacute;n todos los puntos acumulados de <span>Paquidermo Riquencio</span>. Est&aacute; seguro de eliminar la informaci&oacute;n del cliente?
                                                    </div>

                                                    
                                                    <div class="footer-flot-eliminar">
                                                        <button class="btn-base" type="button" onclick="document.getElementById('modal-wrapper-eliminar4').style.display='none'">Cancelar</button>
                                                        <button class="btn-base btn-guardar" type="submit">Si</button>
                                                    </div>
                                                </div>                                            
                                            </div>

                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
                                </div>
                            </td>
                        </tr>                                    
                        <tr>
                            <td>Filipino</td>
                            <td>Rosas</td>
                            <td>05</td>
                            <td>
                                <div class="horizontal">
                                    <!--------------------------------------------------------------------Inicio Cuadro flotante----------------------------------------------------------------------------------->
                                    <div id="cuadro-flotante">
                                        <button class="btn-base btn-guardar btn-ver-mas" onclick="document.getElementById('modal-wrapper-5').style.display='block'">
                                           ver más
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-5" class="modal">

                                            <div class="modal-content animate">
                                                <div class="imgcontainer">
                                                    <span onclick="document.getElementById('modal-wrapper-5').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                                    <div class="titulo-flot">
                                                        Informaci&oacute;n del Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container">
                                                    <span>
                                                         <div class="titulo-campo nombre-cliente">Filipino Rosas</div>
                                                         <div class="texto-campo">Puntos acumulados: <strong><span>05</span></strong></div>
                                                    </span>
                                                    <div class="marginb">
                                                        <div class="actividad">
                                                            Actividad
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-green"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han acumulado <span>25</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="info-actividad">
                                                            <span><i class="far fa-circle act-red"></i></span>
                                                            <div class="vertical">
                                                                <div class="fecha-hora-actividad">17/01/2019 10:37</div>
                                                                <div class="descrip-actividad">Se han canjeado <span>100</span> puntos. </div>
                                                            </div>                                                            
                                                        </div>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
    <!--------------------------------------------------------------------Fin Cuadro flotante----------------------------------------------------------------------------------->
                                    
                                    <div id="cuadro-flotante">
                                        <button class="btn-eliminar-rojo rojo" onclick="document.getElementById('modal-wrapper-eliminar5').style.display='block'">
                                           eliminar
                                        </button>

                                        <!------Inicio Contenido Cuadro flotante--->
                                        <div id="modal-wrapper-eliminar5" class="modal">

                                            <div class="modal-content-eliminar animate">
                                                <div class="imgcontainer-eliminar">
                                                   <div class="simbolo-pregunta"><i class="fas fa-question-circle"></i></div>
                                                    <div class="titulo-flot">
                                                        Eliminar Cliente
                                                    </div>
                                                </div>

                                                <div class="flotante-container-eliminar">
                                                    <div class="texto-eliminar">
                                                        Se eliminar&aacute;n todos los puntos acumulados de <span>Filipino Rosas</span>. Est&aacute; seguro de eliminar la informaci&oacute;n del cliente?
                                                    </div>

                                                    
                                                    <div class="footer-flot-eliminar">
                                                        <button class="btn-base" type="button" onclick="document.getElementById('modal-wrapper-eliminar5').style.display='none'">Cancelar</button>
                                                        <button class="btn-base btn-guardar" type="submit">Si</button>
                                                    </div>
                                                </div>                                            
                                            </div>

                                        </div>
                                        <!------Fin Contenido Cuadro flotante--->
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <div class="paging">
                                    <ul>
                                        <li class="buscar-cliente">
                                              <input type="text" class="buscar-cliente" placeholder="Digitar numero de documento del cliente">
                                              <a href="#"> <span><i class="fas fa-search"></i></span></a>
                                        </li>                                       
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!---------------------------------Fin Contenido principal. Por fuera del nav-header y del aside---------------------------------------------------------->
        </div>
    </div>
</body>
<?php
    include_once('layout/scripts.php');
    ?>

</html>
