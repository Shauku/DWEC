<?php
$page = "subir";
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

        <!-- MAIN PAGE -->
        <div class="contenido container">
            <div id="pasos">
                <h3>Evalua tu código</h3>
                <hr/>
                <div class="row">
                    <div class="col-md-1 right-align">
                        <img src="./dist/img/pageone.png" height="64" width="64"/>
                    </div>
                    <div class="col-md-4">
                        <h4>Selecciona un archivo o varios:</h4>
                        <br/>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Seleccionar...</span>
                            <input type="text" class="form-control" placeholder="Ruta del archivo">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <br/>
                        <br/>
                        <br/>
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </div>
                    <div class="col-md-6">
                        <h4>Selecciona los archivos que quieras subir:</h4>
                        <div class="box">
                            <div class="row files-row">
                                <div class="col-md-2 file" data-toggle="modal" data-target="#file-content">
                                    <img src="./dist/img/icon-js.png" width="40" height="40" />
                                    <span>Fichero1.js</span>
                                </div>
                                <div class="col-md-2 file" data-toggle="modal" data-target="#file-content">
                                    <img src="./dist/img/icon-js.png" width="40" height="40" />
                                    <span>Fichero2.js</span>
                                </div>
                                <div class="col-md-2 file file_selected" data-toggle="modal" data-target="#file-content">
                                    <img src="./dist/img/icon-js.png" width="40" height="40" />
                                    <span>Fichero3.js</span>
                                </div>
                                <div class="col-md-2 file file_selected" data-toggle="modal" data-target="#file-content">
                                    <img src="./dist/img/icon-js.png" width="40" height="40" />
                                    <span>Fichero4.js</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-1 right-align">
                        <img src="./dist/img/pagetwo.png" height="64" width="64"/>
                    </div>
                    <div class="col-md-5">
                        <h4>Selecciona el reto para este código:</h4>
                        <br/>
                        <select class="form-control">
                            <option>Ninguno</option>
                            <option>TusInscripciones</option>
                            <option>ITVDAM</option>
                            <option>Proyecto</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr/>
            <div id="results" class="row">
                <h2>Resultados: </h2>
                <br/>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Fichero3.js</a></li>
                    <li><a href="#">Fichero4.js</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="row">
                        <br/>
                        <dl class="dl-horizontal">
                            <dt>Tiempo:</dt>
                            <dd>7 dias, 3 horas, 24 minutos.</dd>
                            <dt>Tabulación del contenido:</dt>
                            <dd>Correcta</dd>
                            <dt>Estructuración del código:</dt>
                            <dd>Correcta</dd>
                            <dt>Puntuación:</dt>
                            <dd><div id="stars">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </div></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include("./Plantillas/footer.html"); ?>

    </body>
</html>