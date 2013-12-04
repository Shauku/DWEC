<?php
?>
<html>
    <head>
        <?php include("./Plantillas/header.html"); ?>
    </head>
    <body>
        <?php include("./Plantillas/cabecera.html"); ?>
        <div class="contenido container">
            <div class="row">
                <div class="col-md-6 portada">
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h2>Registrate!</h2>
                        <hr/>
                        <button id="btnregfacebook" class="btn btn-success">Entrar</button>
                        <br/>
                        <br/>
                        <label for="Nombre:">Nombre:</label>
                        <input type="text" id="name" class="form-control" placeholder="Nombre"/>
                        <br/>
                        <label for="Nombre:">Email:</label>
                        <input type="email" id="email" class="form-control" placeholder="Email"/>
                        <br/>
                        <label for="Nombre:">Contraseña:</label>
                        <input type="password" id="password" class="form-control" placeholder="Constraseña"/>
                        <br/>
                        <label for="Nombre:">Repetir contraseña:</label>
                        <input type="password" id="confpass" class="form-control" placeholder=""/>
                        <br />
                        <input type = "checkbox" id = "terminos" value = "Acepto los términos y condiciones" />
                        <button id="register" class="btn btn-success">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include("./Plantillas/footer.html"); ?>
    </body>
</html>

