<?php 
$page = "index";
?>
<html>
    <head>
        <?php include("./Plantillas/header.php"); ?>
    </head>
    <body>

        <!-- HEADER -->
        <?php
        include("./Plantillas/cabecera.php");
        ?>

        <div class="contenido container">
            <div class="row">
                <div id="left-content" class="col-md-6 portada">
                    <h4>Comenta, evalua y compara tu código con el de tus amigos!</h4>
                    <hr/>
                    <?php
                        $commentType="out";
                        include("./Plantillas/publicacion.php");
                    ?>
                </div>
                <div id="right-content" class="col-md-6 portada right-sep">
                    <div id="datosreg">
                        <h2>Registrate!</h2>
                        <hr/>
                        <button id="btnregfacebook" class="btn btn-success">Registrarse con Facebook</button>
                        <br/>
                        <hr/>
                        <br/>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" class="form-control reg" placeholder="Nombre"/>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control reg" placeholder="Email"/>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" class="form-control reg" placeholder="Constraseña"/>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="confpas">Repetir contraseña:</label>
                            <input type="password" id="confpass" class="form-control reg" placeholder="Repetir contraseña"/>
                        </div>
                        <br />
                        <input type = "checkbox" id = "terminos" value = "" /> Acepto los términos y condiciones
                        <br/>
                        <br/>
                        <hr/>
                        <br/>
                        <a href="principal.php">
                            <button id="register" class="btn btn-success">Registrarse</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include("./Plantillas/footer.html"); ?>

    </body>
</html>

