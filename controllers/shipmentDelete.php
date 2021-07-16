<?php
    require_once "../config/connect.php";
    $db = Conectar::conexion();
    $sql = "DELETE FROM shipment WHERE id_shipment='".$_POST['id']."'";
            $res = $db->query($sql);
?>