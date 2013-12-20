<?php
$page = "principal";
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
            <div id="rank">
                <h2>Rankings</h2>
                <hr/>
                <div class="row">
                    <div class="circulo-min col-md-3 circulo-min-first">
                        <?php include("./Plantillas/circulo-min.php"); ?>
                    </div>
                    <div class="circulo-min col-md-3">
                        <?php include("./Plantillas/circulo-min.php"); ?>
                    </div>
                    <div class="circulo-min col-md-3">
                        <?php include("./Plantillas/circulo-min.php"); ?>
                    </div>
                    <div class="circulo-min col-md-3 circulo-min-last">
                        <?php include("./Plantillas/circulo-min.php"); ?>
                    </div>
                </div>
                <hr/>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="logros.php"><h2>Ultimos logros</h2></a>
                    <hr/>
                    <div id="logros-container">
                        <?php
                        // Cambia la forma del logro por si es version reducida o completa
                        $isMinLogro = true;
                        $textLogro = "Logro 1";
                        include("./Plantillas/logro.php");
                        $textLogro = "Logro 2";
                        include("./Plantillas/logro.php");
                        $textLogro = "Logro 3";
                        include("./Plantillas/logro.php");
                        $textLogro = "Logro 4";
                        include("./Plantillas/logro.php");
                        $textLogro = "Logro 5";
                        include("./Plantillas/logro.php");
                        ?>
                    </div>
                </div>
                <div id="retos" class="col-md-8 right-sep">
                    <a href="retos.php"><h2>Retos</h2></a>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="retos-table">
                                <h4>Pendientes:</h4>
                                <hr/>
                                <table class="table table-hover">
                                    <thead>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Contrincante</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Web ASP.NET</td>
                                            <td>Aitor Moreno</td>
                                            <td><a href="retos.php"><span class="glyphicon glyphicon-share-alt"></span></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>La Volta</td>
                                            <td>Antonio Domingo</td>
                                            <td><a href="retos.php"><span class="glyphicon glyphicon-share-alt"></span></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Un Mon Millor</td>
                                            <td>Antonio Domingo</td>
                                            <td><a href="retos.php"><span class="glyphicon glyphicon-share-alt"></span></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 right-sep">
                            <div class="retos-table">
                                <h4>En curso:</h4>
                                <hr/>
                                <table class="table table-hover">
                                    <thead>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Contrincante</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TusInscripciones</td>
                                            <td>Aitor Moreno</td>
                                            <td><a href="retos.php"><span class="glyphicon glyphicon-share-alt"></span></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ITVDAM</td>
                                            <td>David Bouso</td>
                                            <td><a href="retos.php"><span class="glyphicon glyphicon-share-alt"></span></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Proyecto</td>
                                            <td>David Bouso</td>
                                            <td><a href="retos.php"><span class="glyphicon glyphicon-share-alt"></span></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include("./Plantillas/footer.html"); ?>

    </body>
</html>