<?php
  //print_r($_POST);
if(isset($_POST['user']) && $_POST['user'] != ""){
  $conexion =mysqli_connect(DB_SERVIDOR,DB_USUARIO,DB_PASSWORD,DB_NOMBRE);

  $pass = $_POST['password'];
  $query ="select * from usuarios where user = '$_POST[user]' and password = '$pass'";
  $resultado = mysqli_query($conexion,$query);

  //print_r(mysqli_num_rows($resultado)); exit();
    
  if(mysqli_num_rows($resultado) > 0){
    $datos = mysqli_fetch_array($resultado);
    //print_r($datos);exit();
    
    if($datos['nivel'] == 1)
      {
        @session_start();
        $_SESSION['user'] = $datos['user'];
        $_SESSION['nivel'] = $datos['nivel'];
        header("Location: index.php");
        exit();
    }


      else if($datos['nivel'] == 2)
      {
       @session_start();
        $_SESSION['user'] = $datos['user'];
        //$_SESSION['matricula'] = $datos['matricula'];
        $_SESSION['nivel'] = $datos['nivel'];
        //print_r($_SESSION['user']); exit();
        header("Location: index.php");
        exit();
    }
    else if($datos['nivel'] == 3)
      {
      @session_start();
        $_SESSION['user'] = $datos['user'];
        //$_SESSION['matricula'] = $datos['matricula'];
        $_SESSION['nivel'] = $datos['nivel'];
        //print_r($_SESSION['user']); exit();
        header("Location: index.php");
        exit();
    }
 
      //declara las variables de sessiones
  }else{
    $error = "El usuario o la contraseña son incorrectos";
  } 
}    
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
          <div class="spacing-1"></div>
          <div class="alert alert-success">
          <?php if(isset($error)){ ?>
            <i class="icon-success"><?php echo $error; ?>
              
            </div>
          <?php } ?>

          <form action="" method="post">
            <fieldset>
              <legend class="center">Login</legend>
              <label class="sr-only" for="user">Usuario</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" id="user" name="user" placeholder="Ingresa tu usuario">
              </div>

              <label class="sr-only" for="clave">Contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" name="password" autocomplete="off" class="form-control" id="clave" placeholder="Ingresa tu Contraseña">
              </div>

              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <button type="submit" class="btn btn-primary btn-block" name="button" id="login">Iniciar sesion</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
