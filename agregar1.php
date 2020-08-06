<?php
if(isset($_POST['insert1'])){

    $moduloService->insert($_POST["codModulo"], $_POST["Nombre"], $_POST["Estado"]);
        echo "<script>alert('Datos Ingresados!')</script>";
        echo "<script> window.open('modulo.php','_self')</script>";
    
}



?>
<form  method = "POST" action="">
        <label>Codigo Modulo:</label>
        <input type="text" name="codModulo" placeholder="Escriba el codigo Modulo"><br/>
        <label>Nombre Modulo:</label>
        <input type="text" name="Nombre" placeholder="Escriba el nombre del Modulo"><br/>
        <label>Estado Modulo:</label>
        <input type="text" name="Estado" placeholder="Escriba el nombre del Modulo"><br/>
        <input type="submit" name="insert1" value="Insertar Datos">
</form>
    
<br/>