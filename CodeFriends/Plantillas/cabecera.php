
<div class="wrapper">
        <div id="cabecera" class="container">
            <div class="row">
                <div id="title" class="col-md-2">
                    <h1>CodeFriends</h1>
                </div>
                <?php
                if ($isFirst === true) {
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
                
                <?php } ?>
            </div>
        </div>