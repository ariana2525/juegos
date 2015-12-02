<?php include('header.php');
?>
<h1>Listado De Productos</h1>

<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_add' ?>" class="btn btn-danger pull-right">
                Nuevo Registro
            </a>
        </div>	
    </div>



      <table class="table table-hover">
        <thead>
            <tr>
                <th>cod_producto</th>
                <th>nombre</th>
                <th>cat_producto</th>
                <th>cod_proveedor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($x = 0; $x < count($items_empleados); $x++): ?>
                <tr>
                    <td><?php echo $items_empleados[$x]->cod_producto ?></td>
                    <td><?php echo $items_empleados[$x]->nombre?></td>
                    <td><?php echo $items_empleados[$x]->cat_producto?></td>
                    <td><?php echo $items_empleados[$x]->cod_proveedor?></td>
                    <td>
                         <a href=" <?php echo BASE_URL . $controlador . '/load_delete/' . $items_empleados[$x]->cod_producto ?> " class="btn btn-danger">Eliminar</a>
                        <a href=" <?php echo BASE_URL . $controlador . '/load_update/' . $items_empleados[$x]->cod_producto ?> " class="btn btn-info">Editar</a>   

                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>
<?php include('footer.php'); ?>


