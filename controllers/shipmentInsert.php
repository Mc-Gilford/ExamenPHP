<?php
    require_once "../config/connect.php";
    $db = Conectar::conexion();
    $sql = "INSERT INTO shipment (id_courier, id_product, id_status)
            VALUES ('".$_POST['idCourier']."','".$_POST['idProduct']."','".$_POST['idStatus']."')";
            //INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
            //VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway')
            $res = $db->query($sql);
?>