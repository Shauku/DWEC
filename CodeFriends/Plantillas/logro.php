<?php
if ($isMinLogro)
{
?>

<div id="logro-min" class="logro">
    <div class="row">
        <div id="logro-logo" class="col-md-2">
            <img src="./dist/img/award.png" width="40" height="40" />
        </div>
        <div id="logro-name" class="col-md-9 right-sep">
            <label id="lbltitle"><?php echo $textLogro; ?></label>
        </div>
    </div>
</div>

<?php } else { ?>

<div id="logro">
</div>

<?php } ?>
