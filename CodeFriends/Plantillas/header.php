<?php ?>
<title>CodeFriends</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script type="text/javascript" src="./dist/js/shCore.js"></script>
<script type="text/javascript" src="./dist/js/shBrushJScript.js"></script>
<link type="style/css" rel="stylesheet" href="./dist/css/bootstrap.css"/>
<link type="style/css" rel="stylesheet" href="./dist/css/shCore.css"/>
<link type="style/css" rel="stylesheet" href="./dist/css/shThemeDefault.css"/>
<link type="style/css" rel="stylesheet" href="./dist/css/style.css"/>
<?php 
    if ($page === "principal"){
?>
<link type="style/css" rel="stylesheet" href="./dist/css/principal.css"/>
<link type="style/css" rel="stylesheet" href="./dist/css/logro.css"/>
    <?php } ?>
<?php 
    if ($page === "circulos"){
?>
<link type="style/css" rel="stylesheet" href="./dist/css/circulos.css"/>
<link type="style/css" rel="stylesheet" href="./dist/css/publicacion.css"/>
    <?php } ?>
<?php 
    if ($page === "subir"){
?>
<link type="style/css" rel="stylesheet" href="./dist/css/subir.css"/>
    <?php } ?>
<?php 
    if ($page === "amigos"){
?>
<link type="style/css" rel="stylesheet" href="./dist/css/amigos.css"/>
    <?php } ?>
<?php 
    if ($page === "retos"){
?>
<link type="style/css" rel="stylesheet" href="./dist/css/retos.css"/>
    <?php } ?>
<?php 
    if ($page === "logros"){
?>
<link type="style/css" rel="stylesheet" href="./dist/css/logros.css"/>
<link type="style/css" rel="stylesheet" href="./dist/css/logro.css"/>
    <?php } ?>
<script type="text/javascript" src="./dist/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="./dist/js/bootstrap.js"></script>
