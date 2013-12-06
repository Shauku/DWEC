<?php if ($commentType === "out") { ?>
    <div id="comments" class="<?php echo $column; ?>">
        <div class="row">
            <div id="comentari-user-icon" class="col-md-2">
                <span class="glyphicon glyphicon-user"></span>
            </div>
            <div id="comentari-user" class="col-md-10">
                <h5><strong>Usuario Ejemplo</strong></h5>
                <br/>
                <div class="comentari">
                    <span class="comentari">Comentario de ejemplo número uno.</span>
                </div>
            </div>
        </div>
    </div>
<?php } else if ($commentType === "in") { ?>
<div class="comments-in">
    <h4 class="stripe short"></h4>
    <div class="row">
        <div id="comentari-user-icon" class="col-md-1">
            <span class="glyphicon glyphicon-user"></span>
        </div>
        <div id="comentari-user" class="col-md-2">
            <span class="comentari">Comentario de:</span>
            <br/>
            <label>Aitor Moreno</label>
        </div>
        <div class="col-md-9">
            <div class="comentari">
                <span class="comentari">Comentario de ejemplo número uno. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
            </div>
        </div>
    </div>
</div>
<?php } ?>
