<?php
    require_once "config/connect.php";
    require_once "controllers/Envios.php";

    $control = new enviosController();
    $control->index();

?>
