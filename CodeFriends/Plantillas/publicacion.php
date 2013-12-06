<?php
if ($page === "index") {
    ?>

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
            $column = "col-md-8";
            include("./Plantillas/comentari.php");
            ?>
            <div class="col-md-1"></div>
        </div>
    </div>
    <?php
} else if ($page === "circulos") {
    if ($publiType === "short") {
        ?>
        <div>
            <div class="row">
                <div id="publi-user-icon" class="col-md-1">
                    <span class="glyphicon glyphicon-user"></span>
                </div>
                <div id="publi-user" class="col-md-2">
                    <label>Daniel Gomez</label>
                    <br/>
                    <span>Ha publicado</span>
                </div>
                <div id="publi-user-comment" class="col-md-9 right-sep">
                    <span class="comment">Esto es una publicacion pequeña de prueba. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                </div>
            </div>
            <br/>
            <div class="row">
                <div id="actions" class="col-md-2 col-md-offset-10">
                    <span>Comentar</span>
                </div>
            </div>
            <?php
            if ($comentari === true) {
                ?>
                <div class="row">
                    <div class="col-md-9 col-md-offset-3">
                        <?php
                        $commentType = "in";
                        include("./Plantillas/comentari.php");
                        ?>
                    </div>
                </div> <?php } ?>
        </div>

    <?php } else if ($publiType === "large") { ?>

        <div>
            <div class="row">
                <div id="publi-user-icon" class="col-md-1">
                    <span class="glyphicon glyphicon-user"></span>
                </div>
                <div id="publi-user" class="col-md-2">
                    <label>Daniel Gomez</label>
                    <br/>
                    <span>Ha publicado</span>
                </div>
                <div id="publi-user-comment" class="col-md-9 right-sep">
                    <label>Nuevo código en el reto: TusInscripciones</label>
                    <div class="row files-row">
                        <div class="col-md-2 file" data-toggle="modal" data-target="#file-content">
                            <img src="./dist/img/icon-js.png" width="40" height="40" />
                            <span>Fichero1.js</span>
                        </div>
                        <div class="col-md-2 file" data-toggle="modal" data-target="#file-content">
                            <img src="./dist/img/icon-js.png" width="40" height="40" />
                            <span>Fichero2.js</span>
                        </div>
                        <div class="col-md-2 file" data-toggle="modal" data-target="#file-content">
                            <img src="./dist/img/icon-js.png" width="40" height="40" />
                            <span>Fichero3.js</span>
                        </div>
                        <div class="col-md-2 file" data-toggle="modal" data-target="#file-content">
                            <img src="./dist/img/icon-js.png" width="40" height="40" />
                            <span>Fichero4.js</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="actions" class="col-md-2 col-md-offset-10">
                    <span>Comentar</span>
                </div>
            </div>
            <?php
            if ($comentari === true) {
                ?>
                <div class="row">
                    <div class="col-md-9 col-md-offset-3">
                        <?php
                        $commentType = "in";
                        include("./Plantillas/comentari.php");
                        ?>
                    </div>
                </div> <?php } ?>
        </div>
        <div class="modal fade" id="file-content" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:clearall();">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Contenido del fichero</h4>
                    </div>
                    <div class="modal-body">
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
                            <div id="stars">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    <?php } ?>
<?php } ?>
