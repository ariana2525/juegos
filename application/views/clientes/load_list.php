<?php include('header.php');
?>

<div class="container">
    <br>
    <br>
  
<div>
    

<div class="col-md-8">
    

       <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($x = 0; $x < count($items_clientes); $x++): ?>
                <tr>
                    <td><?php echo $items_clientes[$x]->id ?></td>
                    <td><?php echo $items_clientes[$x]->nombre ?></td>
                    <td><?php echo $items_clientes[$x]->descripcion ?></td>
                    <td><?php echo $items_clientes[$x]->categoria ?></td>
                    <td>
                         <a href=" <?php echo BASE_URL . $controlador . '/load_delete/' . $items_clientes[$x]->id ?> " class="btn btn-danger">Eliminar</a>
                        <a href=" <?php echo BASE_URL . $controlador . '/load_update/' . $items_clientes[$x]->id ?> " class="btn btn-info">Editar</a>   

                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>
</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>
<?php include('footer.php'); ?>




