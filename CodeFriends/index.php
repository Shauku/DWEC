<?php ?>
<html>
    <head>
        <?php include("./Plantillas/header.html"); ?>
    </head>
    <body>

        <!-- HEADER -->
        <?php
        $isFirst = true;
        include("./Plantillas/cabecera.php");
        ?>

        <div class="contenido container">
            <div class="row">
                <div id="left-content" class="col-md-6 portada">
                    <h4>Comenta, evalua y compara tu código con el de tus amigos!</h4>
                    <hr/>
                    <div id="example">
                        <pre id="codeexample" class="brush: js; ruler: true;">
//EXAMPLE CODE
var max_vels_blue;
var type;
$( document ).ready(function() {
    //prefixes of implementation that we want to test
    window.indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB;

    //prefixes of window.IDB objects
    window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction;
    window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange

    if (!window.indexedDB) {
        window.alert("Your browser doesn't support a stable version of IndexedDB.")
    }

    db=null;
    var request = window.indexedDB.open("LaVolta2", 1);

    request.onerror = function(event) {
        console.log("error: ");
    };

    request.onsuccess = function(event) {
        db = request.result;
        console.log("success: "+ db);
        type=true;
        retrieveData(isStarted, true);
    };
});
                        </pre>
                        <div class="row">
                            <div id="stars" class="col-md-3">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </div>
                            <?php 
                                $column="col-md-8";
                                include("./Plantillas/comentari.php");
                            ?>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div id="right-content" class="col-md-6 portada">
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
                        <button id="register" class="btn btn-success">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include("./Plantillas/footer.html"); ?>

    </body>
</html>

