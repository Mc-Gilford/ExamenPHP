<?php
    class enviosModel{
        private $db;
        private $envios;
        
        public function __construct(){
            $this->db = Conectar::conexion();
            $this->envios = array();
        }


        public function getEnvios(){
            $sql = "SELECT S.id_shipment AS ID, M.name AS Mname, P.name AS Pname,E.name AS Ename, S.timestamp AS Stimestamp
            FROM shipment S, couriers M, products P, status E 
            WHERE S.id_courier=M.id_courier AND S.id_product = P.id_product AND S.id_status = E.id_status";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc())
            {
                $this->envios[]= $row;
            }
            return $this->envios;
        }

    }
?>