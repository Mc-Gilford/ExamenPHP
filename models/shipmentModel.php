<?php
    class shipmentModel{
        private $db;
        private $id_courier;
        private $id_product;
        private $id_status;
        
        public function __construct($id_courier, $id_product,$id_status){
            $this->db = Conectar::conexion();
            $this->id_courier = $id_courier;
            $this->id_product = $id_product;
            $this->id_status = $id_status;
        }


        public function insertShipment(){
            $sql = "INSERT INTO shipment (id_courier, id_product, id_status)
            VALUES ('".$this->id_courier."','".$this->id_product."','".$this->id_status."')";
            //INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
            //VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway')
            $res = $this->db->query($sql);
        }

    }
?>