<?php include('header.php');
?>

<div class="container">


    <div >

        <h3>Actualizar Producto</h3>   
        <br> 

    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_list' ?>" class="btn btn-danger pull-right">Regresar</a>
        </div>
    </div>

    <form action="<?php echo BASE_URL . $controlador . '/action_update' ?>" method="post">
        <div class="row">
            <fieldset>
                <legend>Datos del Producto</legend>

                    <div class="col-md-4">
                 
                    <input value="<?php echo $item_empleados->cod_producto; ?>" type="hidden" class="form-control" id='cod_producto' name='cod_producto'>
                    </div>

                <div class="col-md-4">
                    <p>Nombre</p>
                    <input value="<?php echo $item_empleados->nombre; ?>" type="text" class="form-control" id="nombre" name="nombre">
                </div>

                <div class="col-md-4">
                    <p>Categoria Producto</p>
                    <input  value="<?php echo $item_empleados->cat_producto; ?>" type="text" class="form-control" id="cat_producto" name="cat_producto">
                </div>
                 
                    


            
            </fieldset>
        </div>


    

        
        <br>
        <br>
        <center><button type="submit" class="btn btn-danger">Actualizar</button></center>

    </form>

</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>

<?php include('footer.php'); ?>


