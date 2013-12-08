<?php

if (($tipoAmigo === "encuentra")||($tipoAmigo === "conoce")||($tipoAmigo === "amigo")) {
    ?>
    <table id="new-friends" class="table table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>
                    <?php if ($tipoAmigo==="encuentra") {?>
                    Añadir
                    <?php } else if ($tipoAmigo==="conoce") { ?>
                    Ver Perfil
                    <?php } else if ($tipoAmigo==="amigo") { ?>
                    Mensaje
                    <?php } ?>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td <?php if ($tipoAmigo==="amigo") { ?>class="icon-amigo"<?php } ?> >
                    <span class="glyphicon glyphicon-user"></span>
                </td>
                <td>
                    <label>Silvia Martinez</label>
                    <?php if ($tipoAmigo==="amigo") { ?>
                    <br/>
                    <span class="common-friends">56 Amigos en común.</span>
                    <?php } ?> 
                </td>
                <td>
                    <?php if ($tipoAmigo==="encuentra") {?>
                    <span id="agregar" class="glyphicon glyphicon-plus"></span>
                    <?php } else if ($tipoAmigo==="conoce") { ?>
                    <span id="perfil" class="glyphicon glyphicon-eye-open"></span>
                    <?php } else if ($tipoAmigo==="amigo") { ?>
                    <span id="agregar" class="glyphicon glyphicon-envelope"></span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td <?php if ($tipoAmigo==="amigo") { ?>class="icon-amigo"<?php } ?> >
                    <span class="glyphicon glyphicon-user"></span>
                </td>
                <td>
                    <label>Albert Llop</label>
                    <?php if ($tipoAmigo==="amigo") { ?>
                    <br/>
                    <span class="common-friends">6 Amigos en común.</span>
                    <?php } ?> 
                </td>
                <td>
                    <?php if ($tipoAmigo==="encuentra") {?>
                    <span id="agregar" class="glyphicon glyphicon-plus"></span>
                    <?php } else if ($tipoAmigo==="conoce") { ?>
                    <span id="perfil" class="glyphicon glyphicon-eye-open"></span>
                    <?php } else if ($tipoAmigo==="amigo") { ?>
                    <span id="agregar" class="glyphicon glyphicon-envelope"></span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td <?php if ($tipoAmigo==="amigo") { ?>class="icon-amigo"<?php } ?> >
                    <span class="glyphicon glyphicon-user"></span>
                </td>
                <td>
                    <label>Jordi Delgado</label>
                    <?php if ($tipoAmigo==="amigo") { ?>
                    <br/>
                    <span class="common-friends">565 Amigos en común.</span>
                    <?php } ?> 
                </td>
                <td>
                    <?php if ($tipoAmigo==="encuentra") {?>
                    <span id="agregar" class="glyphicon glyphicon-plus"></span>
                    <?php } else if ($tipoAmigo==="conoce") { ?>
                    <span id="perfil" class="glyphicon glyphicon-eye-open"></span>
                    <?php } else if ($tipoAmigo==="amigo") { ?>
                    <span id="agregar" class="glyphicon glyphicon-envelope"></span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td <?php if ($tipoAmigo==="amigo") { ?>class="icon-amigo"<?php } ?> >
                    <span class="glyphicon glyphicon-user"></span>
                </td>
                <td>
                    <label>Bogdan Onisor</label>
                    <?php if ($tipoAmigo==="amigo") { ?>
                    <br/>
                    <span class="common-friends">48 Amigos en común.</span>
                    <?php } ?> 
                </td>
                <td>
                    <?php if ($tipoAmigo==="encuentra") {?>
                    <span id="agregar" class="glyphicon glyphicon-plus"></span>
                    <?php } else if ($tipoAmigo==="conoce") { ?>
                    <span id="perfil" class="glyphicon glyphicon-eye-open"></span>
                    <?php } else if ($tipoAmigo==="amigo") { ?>
                    <span id="agregar" class="glyphicon glyphicon-envelope"></span>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td <?php if ($tipoAmigo==="amigo") { ?>class="icon-amigo"<?php } ?> >
                    <span class="glyphicon glyphicon-user"></span>
                </td>
                <td>
                    <label>Genis Castells</label>
                    <?php if ($tipoAmigo==="amigo") { ?>
                    <br/>
                    <span class="common-friends">56 Amigos en común.</span>
                    <?php } ?> 
                </td>
                <td>
                    <?php if ($tipoAmigo==="encuentra") {?>
                    <span id="agregar" class="glyphicon glyphicon-plus"></span>
                    <?php } else if ($tipoAmigo==="conoce") { ?>
                    <span id="perfil" class="glyphicon glyphicon-eye-open"></span>
                    <?php } else if ($tipoAmigo==="amigo") { ?>
                    <span id="agregar" class="glyphicon glyphicon-envelope"></span>
                    <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
<?php } ?>

