<?php include('header.php');
?>

<div class="container">


    <div >

        <h3>Login Empleado </h3 >  
        <br> 

    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo BASE_URL . $controlador . '/load_list' ?>" class="btn btn-danger pull-right">Regresar</a>
        </div>
    </div>

    <form action="login_usuario" method="post">
       

      
        <div class="row">
             <div class="col-md-4">
                <p>Usuario</p>
                 <input type="text" class="form-control" id="username" name="username">
             </div>
             <div class="col-md-4">
                 <p>Contraseña</p>
                 <input type="password" class="form-control" id="password" name="password">
             </div>
 
        </div>
        <br>
        <br>
        <center><button type="submit" class="btn btn-danger"> Loggin</button></center>
   </form>
    

</div>
<script src="<?php echo BASE_URL; ?>static/js/master/<?php echo $controlador . '.js' ?>"></script>
<?php include('footer.php'); ?>

 