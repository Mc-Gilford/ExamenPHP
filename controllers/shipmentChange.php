<?php
    require_once "../config/connect.php";
    $db = Conectar::conexion();
    $sql = "SELECT * FROM shipment WHERE id_shipment='".$_POST['id']."'";
            $res = $db->query($sql);
            while($row = $res->fetch_assoc())
            {
                $rows[]= $row;
            }
            if(strcmp($row["id_status"], "1")==0){
                $sql = "UPDATE shipment SET id_status='2' WHERE id_shipment='".$_POST['id']."'";
                $res = $db->query($sql);
            }
            else if(strcmp($row["id_status"], "2")!=0){
                $sql = "UPDATE shipment SET id_status='1' WHERE id_shipment='".$_POST['id']."'";
                $res = $db->query($sql);
            }
?>