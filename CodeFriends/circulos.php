<?php
$page = "circulos";
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

            <div>
                <h2>Circulo 1</h2>
                <hr/>
                <div class="row">
                    <div id="ranking" class="col-md-3">
                        <h4 class="stripe"><span>Ranking</span></h4>
                        <br/>
                        <div class="circle-rank">
                            <table class="table table-hover">
                                <thead>
                                <th>#</th>
                                <th>Nombre</th>
                                <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Daniel Gomez</td>
                                        <td><span class="glyphicon glyphicon-minus"></span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Manolo el del Bombo</td>
                                        <td><span class="glyphicon glyphicon-chevron-up"></span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Aitor Moreno</td>
                                        <td><span class="glyphicon glyphicon-chevron-down"></span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Xavier Fuentes</td>
                                        <td><span class="glyphicon glyphicon-chevron-up"></span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Xavier Lopez</td>
                                        <td><span class="glyphicon glyphicon-chevron-down"></span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Hector ElBoba</td>
                                        <td><span class="glyphicon glyphicon-chevron-down"></span></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Josep Izquierdo</td>
                                        <td><span class="glyphicon glyphicon-chevron-up"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="circle-content" class="col-md-9 right-sep">
                        <h4 class="stripe"><span>  Ultimas publicaciones  </span></h4>
                        <br/>
                        <div class="circle-rank">
                            <?php
                            $publiType = "large";
                            $comentari = false;
                            include("./Plantillas/publicacion.php");?>
                            <h4 class="stripe short"></h4>
                            <?php
                            $publiType = "short";
                            $comentari = true;
                            include("./Plantillas/publicacion.php");?>
                            <h4 class="stripe short"></h4>       
                            <?php
                            $publiType = "large";
                            $comentari = true;
                            include("./Plantillas/publicacion.php");?>
                            <h4 class="stripe short"></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include("./Plantillas/footer.html"); ?>

    </body>
</html>