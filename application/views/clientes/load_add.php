<?php include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <!-- Acción sobre el botón con id=boton y actualizamos el div con id=capa -->
<script type="text/javascript">
            $(document).ready(function() {
                $("#botonn").click(function(event) {
                    $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#capa');
                    $("#capa").load('<?php echo BASE_URL . $controlador . '/load_update' ?>');
                });
            });
        </script>

</head>
<body>

</body>
</html>

<div class="container ">

  <div class="modal fade" id="modal-id">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                  <div>
                    <div id="capa">
    

                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </div>
      </div>
  </div>

    <div>

        <h3>Registrate en el IST. METROPOLITANO</h3> 
        <br> 

    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_list' ?>" class="btn btn-danger pull-right">Regresar</a>
        </div>
    </div>

    <form action="add_clientes" method="post" >
        <div class="row">
            <fieldset>
                <legend>Datos</legend>

                <div class="col-md-6">
                    <p>Nombre</p>
                    <input   type="text" class="form-control" id="nombre" name="nombre" placeholder="nombres">
                </div>

                <div class="col-md-6">
                    <p>Apellidos</p>
                    <input   type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos">
                </div>

                <div class="col-md-6">
                    <p>Email</p>
                    <input   type="text" class="form-control" id="email" name="email" placeholder="email">
                </div>
                <div class="col-md-6">
                    <p>Telefono</p>
                    <input   type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono">
                </div>
              
<br>
<br>
<legend>Profesion/Cursos Libres</legend>



                <div class="col-md-4">
                    <p>Carrera</p>
                    <select class="form-control" name="carrera">
                       <?php 


                        echo $carreras;
                        ?>
                    </select>  
                </div>

                 <div class="col-md-4">
                    <p>Cursos Libres</p>
                    <select class="form-control" name="curso_libre">
                        <?php 
                            echo $computacion;
                        ?>
                      
                        <?php 
                            echo $contabilidad;
                        ?>
                         <?php 
                            echo $publicitario;
                        ?>

                        
                        <?php 
                            echo $electronica;
                        ?>
                         <?php 
                            echo $mecanica;
                        ?>
                        
                    </select>  
                </div>



               


        </div>
        <br>
        <br>
        <center><button type="submit" class="btn btn-danger"> Registrar</button></center>






    </form>
    <div class="col-md-12">
<div  class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item">
           <a href="#" class="list-group-item active">
            FECHA
            <span class="badge">DD/MM/AA</span>

            </a>

    
                
                <a   name="boton" id="boton" class="btn list-group-item"> ENERO  <span class="badge">0</span></a>
                <a name="frebrero" id="febrero" class="btn list-group-item">FEBRERO <span class="badge">0</span></a>
                <a name="marzo" id="marzo" class="btn list-group-item">MARZO <span class="badge">0</span></a>
                <a name="abril" id="abril" class="btn list-group-item">ABRIL <span class="badge">0</span></a>
                <a name="mayo" id="mayo" class="btn list-group-item">MAYO <span class="badge">0</span></a>
                <a name="junio" id="junio" class="btn list-group-item">JUNIO <span class="badge">0</span></a>
                <a name="julio" id="julio" class="btn list-group-item">JULIO <span class="badge">0</span></a>
                <a name="agosto" id="agosto" class="btn list-group-item">AGOSTO <span class="badge">0</span></a>
                <a name="setiembre" id="setiembre" class="btn list-group-item"> SETIEMBRE <span class="badge">0</span></a>
                <a name="octubre" id="octubre" class="btn list-group-item">OCTUBRE <span class="badge">0</span></a>
                <a name="noviembre" id="noviembre" class="btn list-group-item">NOVIEMBRE <span class="badge">0</span></a>
                <a name="diciembre" id="diciembre" class="btn list-group-item">DICIMBRE <span class="badge">0</span></a>


        </ul>
    </div>
     <div class="col-md-8" id="contenido">
         

     </div>

    <div class="col-md-4" >

         <script type="text/javascript">
            $(document).ready(function() {
                $("#boton").click(function(event) {
                    $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_enero' ?>',function(){
                      
                    });


                });

                $("#febrero").click(function(event) {
                    $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_febrero' ?>',function(){
                      
                    });
                });
                $("#marzo").click(function(event) {
                   $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_marzo' ?>',function(){
                      
                    });
                });
                $("#abril").click(function(event) {
                    $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_abril' ?>',function(){
                      
                    });
                });
                 $("#mayo").click(function(event) {
                   $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_mayo' ?>',function(){
                      
                    });
                });
                  $("#junio").click(function(event) {
                   $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_junio' ?>',function(){
                      
                    });
                });
                   $("#julio").click(function(event) {
                   $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_julio' ?>',function(){
                      
                    });
                });
                    $("#agosto").click(function(event) {
                    $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_agosto' ?>',function(){
                      
                    });
                });
                     $("#setiembre").click(function(event) {
                    $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_setiembre' ?>',function(){
                      
                    });
                });
                      $("#octubre").click(function(event) {
                    $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_octubre' ?>',function(){
                      
                    });
                });
                       $("#noviembre").click(function(event) {
                   $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_noviembre' ?>',function(){
                      
                    });
                });
                        $("#diciembre").click(function(event) {
                    $('<img />', { 'src': '<?php echo BASE_URL . "static/images/loaderr.gif" ?>', 'id': 'miImagen', 'class':'miClase' }).appendTo('#contenido');
                    $("#contenido").load('<?php echo BASE_URL . $controlador . '/load_diciembre' ?>',function(){
                      
                    });
                });
            });
        </script>
         
        
    </div>




</div>



<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>
<?php include('footer.php'); ?>

 