<!DOCTYPE HTML>
<html lang="es">

<!--
<div class="product">
	<img src="assets/innova.png" />
	<h2> Servidores ISP</h2>
</div>
*/
				

/*require_once 'autoload.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';
require_once 'views/layout/footer.php';*/
-->

    <head>
        <meta charset="utf-8"/>
        <title>
            Innovative Services
        </title>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="container">
            <!-- CABECERA -->

            <header id="header">
                <div id="logo">
                    <img alt="Innova Logo" src="assets/img/innova.png"/>
                    <a href="index.php">
                        Innova Services
                    </a>
                </div>
            </header>
            <!-- MENU -->
                <nav id="menu">
                    <ul>
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Servicios</a>
                        </li>
                        <li>
                            <a href="#">Productos</a>
                        </li>
                    </ul>
                </nav>
            
                <div id="content">
            		<!-- BARRA LATERAL -->
                    <aside id="lateral">
                        <div class="block_aside" id="login">
                            <h3>
                                Acceder
                            </h3>
                            <form action="#" method="post">
                                <label for="user">
                                    Usuario
                                </label>
                                <input name="user" type="user"/>
                                <label for="password">
                                    Contraseña
                                </label>
                                <input name="password" type="password"/>
                                <input type="submit" value="Acceder"/>
                            </form>
                            <ul>
                                <li>
                                    <a href="#">
                                        Registro de altas
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Incidencias
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Registro de pagos
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Consulta deuda
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- CENTRAL -->
                    <div id="central">
                    	<h1>PRODUCTOS Y SERVICIOS</h1>
                    	<div class="product">
                    		<img src="assets/img/innova.png"/>
                        	<h2>Servicio de Internet domiciliario</h2>
                        	<p>plan básico</p>
                        	<a href="">Solicitar</a>
                        </div>
                        <div class="product">
                    		<img src="assets/img/innova.png"/>
                        	<h2>Servicio de Internet Empresarial</h2>
                        	<p>plan básico</p>
                        	<a href="">Solicitar</a>
                        </div>
                        <div class="product">
                    		<img src="assets/img/innova.png"/>
                        	<h2>Ventas y Soporte Técnico</h2>
                        	<p>plan básico</p>
                        	<a href="">Solicitar</a>
                        </div>
                    </div>
                </div>
            <!-- PIE DE PAGINA -->
            <footer id="footer">
                <p>
                    Derechos Reservados WEB © <?=date('Y')?>
                </p>
            </footer>
        </div>
    </body>
</html>
