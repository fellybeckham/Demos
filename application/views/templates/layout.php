<html>
<?php include ('header.php'); ?>
<body>
<?php date_default_timezone_set("America/Mexico_City");//require 'logs.php';?>
<div class="servicios">
    <div class = "encabezado">
        <div class="layout-header"></div>
    </div>
        <div id="Contenido">
            <?php echo $vista;?>
        </div>
    <?php include ('footer.php'); ?>
</div>
</body>
</html>