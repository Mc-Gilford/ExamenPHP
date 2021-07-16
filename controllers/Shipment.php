<?php
    class shipmentController{
        public function insert($idCourier,$idProduct,$idStatus){
            require_once "models/shipmentModel.php";
            $shipment = new shipmentModel($idCourier, $idProduct,$idStatus);
            $shipment->insertShipment();
            //require_once "views/registerShipment.php";
        }
    }
    require_once "../config/connect.php";
    $control = new shipmentController();
    $control->insert($_POST['idCourier'],$_POST['idProduct'],$_POST['idStatus']);
?>