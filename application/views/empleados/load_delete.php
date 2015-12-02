<?php include('header.php');
?>

<div class="container">


    <div >

        <h3>ACTUALIZAR EMPLEADO</h3>   
        <br> 

    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_list' ?>" class="btn btn-danger pull-right">Regresar</a>
        </div>
    </div>

    <form action="<?php echo BASE_URL . $controlador . '/action_delete' ?>" method="post">
        <div class="row">
            <fieldset>
                <legend>Datos Personales</legend>

                    <div class="col-md-4">
                 
                    <input value="<?php echo $item_empleados->cod_producto99; ?>" type="hidden" class="form-control" id='id' name='id'>
                    </div>

                <div class="col-md-4">
                    <p>Nombre</p>
                    <input value="<?php echo $item_empleados->nombres; ?>" type="text" class="form-control" id="nombre" name="nombres" disabled>
                </div>

                <div class="col-md-4">
                    <p>Apellidos</p>
                    <input  value="<?php echo $item_empleados->apellidos; ?>" type="text" class="form-control" id="apellidos" name="apellidos" disabled>
                </div>

                <div class="col-md-4">
                    <p>Tipo de documento</p>
                    <select name="tipo_doc" id="tipo_doc" class="form-control" disabled>
                        <option value=""><?php echo $item_empleados->tipo_doc; ?></option>
                        <option value="DNI">DNI</option>
                        <option value="CE">CE</option>

                    </select>
                </div>


                <div class="col-md-4">
                    <p>Numero</p>
                    <input value="<?php echo $item_empleados->nro; ?>" type="text" class="form-control" id="nro" name="nro" disabled>
                </div>


                <div class="col-md-4">
                    <p>Profesion</p>
                    <select class="form-control" name="profesion_id" disabled>
                        <option value=""><?php echo $item_empleados->profesion_id; ?></option> 
                        <option value="">--Seleccione--</option> 
                        <?php
                        for ($i = 0; $i < count($items_profesion); $i++) {
                            ?>

                            <option value="<?php echo $items_profesion[$i]->id; ?>">
                                <?php echo $items_profesion[$i]->nombre; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>  
                </div>


                <div class="col-md-4">
                    <p>Ocupacion</p>
                    <input value="<?php echo $item_empleados->ocupacion; ?>" type="text" class="form-control" id="ocupacion" name="ocupacion" disabled>
                </div>





                <div class="col-md-4">
                    <p>Nacionalidad</p>
                    <select class="form-control" name="nacionalidad_id" disabled>
                        <option value=""><?php echo $item_empleados->nacionalidad_id; ?></option> 
                        <option value="">--Seleccione--</option> 
                        <?php
                        for ($i = 0; $i < count($items_paises); $i++) {
                            ?>

                            <option value="<?php echo $items_paises[$i]->id; ?>">
                                <?php echo $items_paises[$i]->nombre; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>  
                </div>




              


                <div class="col-md-4">
                    <p>Fecha de Nacimiento</p>
                    <input value="<?php echo $item_empleados->f_nac; ?>" type="text" class="form-control" id="fecha" name="f_nac" disabled>
                </div>

                


                
            </fieldset>
        </div>




        <div class="row">



          




        </div>
        <br>
        <br>
        <center><button type="submit" class="btn btn-danger">Eliminar</button></center>

    </form>

</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>

<?php include('footer.php'); ?>


