<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="recursos/css/estilos.css">
    <?php
   
    session_start();
    if(isset($_SESSION['usuario'])){
       header('location:vistas/inicio.php');

    }
    ?>
    <title>Login</title>
</head>
<body>
<div id="contenedor">
   
   <div >
      <div >
         <form action="procesos/login/login.php" method="POST" id="form">
         <div id="divTitulo">
                <img src="recursos/img/account_circle-24px.svg" alt="login" id="img1">

            </div>
         <div id="divCamposBoton">       
            <input type="text" name="usuario" id="usuario" placeholder="Usuario">
            <input type="password" name="password" id="password"  placeholder="Password">
            <button id="entrarB">Entrar</button>
         </div>
            
            <a href="registro.php" id="registroLink">Registrarse</a>

             
         </form>

      </div>
   </div>

</div>
    
</body>
</html>