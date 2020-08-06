<?php
 include ("./service/moduloService.php");
 session_start();
 $moduloService = new ModuloService();
 $result = $moduloService->findAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modulo PHP y MYSQL</title>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./css/util.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link href="./css/all.css" rel="stylesheet">
    <!--load all styles -->
    <script src="https://kit.fontawesome.com/a3c8e6637e.js" crossorigin="anonymous"></script>
</head>

<body>

    <br />
    <h1>Gestion de Modulo</h1>
    <div class="cabezera">
        <a class="cab" href="modulo.php?insert1">Agregar<i class="far fa-plus-square"></i></a>
    </div>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">CódigoModulo</th>
                                    <th class="cell100 column2">Nombre</th>
                                    <th class="cell100 column3">Estado</th>
                                    <th class="cell100 column3">Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>



                                            <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    
                                    ?>
                                <tr class="row100 body">
                                    <td class="cell100 column1"><?php echo $row["COD_MODULO"];?> </td>
                                    <td class="cell100 column2"><?php echo $row["NOMBRE"];?></td>
                                    <td class="cell100 column3"><?php echo $row["ESTADO"];?></td>
                                    <td class="cell100 column5"><a
                                            href="modulo.php?editar=<?php echo $row["COD_MODULO"]; ?>"><i
                                                class="fas fa-edit"></i></a></td>
                                    <td class="cell100 column6"><a
                                            href="modulo.php?borrar=<?php echo $row["COD_MODULO"]; ?>"><i
                                                class="fas fa-minus-circle"></i></a></td>
                                </tr>
                                <?php
                                }
                               }else{ ?>

                                    <tr class="row100 body">
                                    <td class="cell100 column1">NO HAY DATOS</td>
                                    </tr>
                                <?php  } ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="formularios" style="display: run-in">
        <?php
        if(isset($_GET['insert1'])){
            include("agregar1.php");
        }    
    ?>
        <?php
        if(isset($_GET['editar'])){
            include("editar.php");
        }    
    ?>
    </div>
    <?php
    if(isset($_GET['borrar'])){
            $moduloService->delete($_GET['borrar']);
    }
    ?>
</body>

</html>