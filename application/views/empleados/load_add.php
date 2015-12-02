<?php include('header.php');
?>

<div class="container">


    <div >

        <h1>Agregar Producto  </h1>    
        <br> 

    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_list' ?>" class="btn btn-danger pull-right">Regresar</a>
        </div>
    </div>

    <form action="add_empleados" method="post">
        <div class="row">
            <fieldset>
         
                <div class="col-md-4">
                    <p>Nombre</p>
                    <input   type="text" class="form-control" id="nombre" name="nombre">
                </div>

                
                    <div class="col-md-4">
                    <p>categoria</p>
                    <select name="cat_producto" id="cat_producto" class="form-control">
                        <option value="">--Seleccione--</option>
                        <option value="menestras">menestras</option>
                        <option value="cereales">cereales</option>

                    </select>
                </div>


                <div class="col-md-4">
                    <p>Codigo Proveedor</p>
                    <input type="text" class="form-control" id="cod_proveedor" name="cod_proveedor">
                </div>


                <div class="col-md-4">
                    <p>cantidad de producto</p>
                    <input type="text" class="form-control" id="cant_producto" name="cant_producto">
                </div>


                <div class="col-md-4">
                    <p>precio_x_unidad</p>
                    <input type="text" class="form-control" id="precio_x_unidad" name="precio_x_unidad">
                </div>

              <br><br><br><br><br>


            
        <center><button type="submit" class="btn btn-danger"> Registrar</button></center>

    </form>

</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>
<?php include('footer.php'); ?>

 