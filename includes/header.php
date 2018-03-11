<nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- logo -->
                <div class="navbar-header">
                    <!-- boton para el menu desplegable -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="img/logo.png" height="24">
                      </a>
                </div>
                
                <!-- menu de opciones -->
                <div class="collapse navbar-collapse" id="top-menu">
                    
                    <!-- primer grupo de opciones -->
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="contactos-form.php">Contacto</a></li>
                        
                        <!-- dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenimiento <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="roles-listar.php">Roles</a></li>
                                <li><a href="usuarios-listar.php">Usuarios</a></li>
                                <li><a href="categorias-listar.php">Categorias</a></li>
                                <li><a href="productos-listar.php">Productos</a></li>
                                <li><a href="clientes-listar.php">Clientes</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Configuración</a></li>
                            </ul>
                        </li>
                        
                        <!-- segundo dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="productos-reporte.php">Reporte de Stock</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    
                    <!-- segundo grupo de opciones a la derecha -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="logout.php">Salir</a></li>
                    </ul>
                    <p class="navbar-text navbar-right">Bienvenido</p>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php">Ingresar</a></li>
                    </ul>
                    
                </div>
                
            </div>
        </nav>