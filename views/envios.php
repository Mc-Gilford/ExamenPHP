<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Examen">
    <meta name="author" content="McGilford">
    <title>Dashboard</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-personalize.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="page-top">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h2 class="m-0 font-weight-bold text-primary text-center">Envios</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Mensajeria</th>
                                            <th>Producto</th>
                                            <th>Estatus</th>
                                            <th>Fecha</th>
                                            <th>Cambiar Estatus</th>
                                            <th>Actualizar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $cont=1;
                                        foreach($data["envios"] as $dato)
                                        {
                                            echo "<tr>";
                                                echo "<td class='text-center' id='operation-".$dato["ID"]."'>".$dato["ID"]."</td>";
                                                echo "<td>".$dato["Mname"]."</td>";
                                                echo "<td>".$dato["Pname"]."</td>";
                                                echo "<td id='estatus-".$dato["Ename"]."'>".$dato["Ename"]."</td>";
                                                echo "<td>".$dato["Stimestamp"]."</td>";
                                                echo '<td class="text-center" id="change-status-'.$dato["ID"].'" onclick="ChangeStatus(this.id)"><i class="fa fa-circle text-warning"></i></td>';
                                                echo '<td class="text-center" id="update-status-'.$dato["ID"].'" onclick="Update(this.id)"><i class="fa fa-circle text-primary"></i></td>';
                                                echo '<td class="text-center" id="delete-status-'.$dato["ID"].'" onclick="Delete(this.id)"><i class="fa fa-circle text-danger"></i></td>';
                                            echo "</tr>";
                                            $cont++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <input type="button" class="btn btn-primary btn-lg btn-default" value="Agregar Envio" id="btn-send">
                    </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; McGilford 2020</span>
                    </div>
                </div>
            </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/logic.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

</body>

</html>