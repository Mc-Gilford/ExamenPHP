<?php
    class enviosController{
        public function index(){
            require_once "models/EnviosModel.php";
            $envios = new enviosModel();
            $data["envios"]=$envios->getEnvios();
            require_once "views/envios.php";
        }
    }
?>