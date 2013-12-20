
<div class="wrapper">
    <div id="cabecera" class="container">
        <div class="row">
            <div id="title" class="col-md-2">
                <a href="index.php"><h1>CodeFriends</h1></a>
            </div>
            <?php
            if ($page === "index") {
                ?>
                <form class="form-inline" role="form">
                    <div id="login" class="col-md-offset-6 col-md-4">
                        <div class="form-group">
                            <label for="email" class="sr-only"></label>
                            <input type="email" id="email" class=" form-control" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only"></label>
                            <input type="password" id="password" class=" form-control" placeholder="Contraseña"/>
                        </div>
                        <button id="btnlogin" class="btn btn-login">Entrar</button> <br/>
                        <label for="recuerdame" class="sr-only"></label>
                        <input type = "checkbox" id = "recuerdame" value = "Recuerdame" >Recuerdame
                    </div>
                </form>
            <?php } else { ?>
                <div class="col-md-7">
                    <nav id="nav" class="navbar navbar-default" role="navigation">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Menu</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li <?php if ($page === "principal") { ?>class="active"<?php } ?>><a href="principal.php">Inicio</a></li>
                                <li <?php if ($page === "subir") { ?>class="active"<?php } ?>><a href="subir.php">Subir Código</a></li>
                                <li <?php if ($page === "amigos") { ?>class="active"<?php } ?>><a href="amigos.php">Amigos</a></li>
                                <li class="dropdown <?php if ($page === "circulos") { ?>active<?php } ?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Circulos <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="circulos.php">Circulo 1</a></li>
                                        <li><a href="circulos.php">Circulo 2</a></li>
                                        <li><a href="circulos.php">Circulo 3</a></li>
                                    </ul>
                                </li>
                                <li <?php if ($page === "retos") { ?>class="active"<?php } ?>><a href="retos.php">Retos</a></li>
                                <li <?php if ($page === "logros") { ?>class="active"<?php } ?>><a href="logros.php">Logros</a></li>
                                <li><a href="#">Configuracion</a></li>
                                <li><a href="#">Ayuda</a></li>
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Búsqueda">
                                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2">
                    <div id="conected-user" class="row">
                        <div class="col-md-1">
                            <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <div id="userout" class="col-md-10">
                            <label id="name-user">Daniel Gomez</label>
                            <br />
                            <a href="index.php">
                                <button class="btn btn-login">Salir <span class="glyphicon glyphicon-log-out"></span></button>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>