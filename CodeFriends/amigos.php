<?php
$page = "amigos";
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
            <div class="row">
                <div class="col-md-3">
                    <h2 class="fix">Encuentra gente</h2>
                    <hr/>
                    <div id="search-new-friends">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Búsqueda">
                            <span class="input-group-addon glyphicon glyphicon-search"></span>
                        </div>
                    </div>
                    <div class="box">
                        <?php
                        $tipoAmigo = "encuentra";
                        include ("./Plantillas/amigo.php");
                        ?>
                    </div>
                </div>
                <div class="col-md-6 right-sep left-sep">
                    <div class="row">
                        <div class="col-md-2">
                            <h2>Amigos</h2>
                        </div>
                        <div id="search-friends" class="col-md-6 col-md-offset-4">
                            <div class="input-group pull-right">
                                <input type="text" class="form-control" placeholder="Búsqueda">
                                <span class="input-group-addon glyphicon glyphicon-search"></span>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="box">
                        <?php
                        $tipoAmigo = "amigo";
                        include ("./Plantillas/amigo.php");
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2 class="fix">Quizás conozcas</h2>
                    <hr/>
                    <div class="box">
                        <?php
                        $tipoAmigo = "conoce";
                        include ("./Plantillas/amigo.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include("./Plantillas/footer.html"); ?>

    </body>
</html>