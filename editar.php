<?php
    if(isset($_GET['editar'])){
     $modulo = $moduloService->findByPK($_GET['editar']);
     $codigoModulo='';
     if ($modulo!=null){
        $nombreModulo=$modulo['NOMBRE'];
        $estadoModulo=$modulo['ESTADO'];
        $codigoModulo=$modulo['COD_MODULO'];
    }
    }
?>
<br />
<form method="POST" action="">
    <label>Nombre Producto:</label>
    <input type="text" name="nombreModulo" value="<?php echo $nombreModulo;?>"><br />
    <label>Estado Producto:</label>
    <input type="text" name="estadoModulo" value="<?php echo $estadoModulo;?>"><br />
    
    <input type="submit" name="actualizar" value="ACTUALIZAR DATOS">
</form>
<?php
    if(isset($_POST['actualizar'])){

        $actualizar_nombreModulo = $_POST['nombreModulo'];
        $actualizar_estadoModulo = $_POST['estadoModulo'];
        $moduloService->update($actualizar_nombreModulo,$actualizar_estadoModulo,$codigoModulo);
        echo "<script>alert('Datos Actualizados!')</script>";
        echo "<script> window.open('modulo.php','_self')</script>";
    
        /*
        
        $actualizar_nombreModulo = $_POST['nombreModulo'];
        $actualizar_estadoModulo = $_POST['estadoModulo'];
        $actualizar = "UPDATE SEG_MODULO SET NOMBRE ='$actualizar_nombreModulo',ESTADO='$actualizar_estadoModulo' WHERE COD_MODULO='$editar_codModulo'";
        $ejecutar=mysqli_query($conex,$actualizar);
        if($ejecutar){
            echo "<script>alert('Datos Actualizados!')</script>";
            echo "<script> window.open('modulo.php','_self')</script>";
        }else {
            var_dump($conex->error);
          }
          */
    }
?>