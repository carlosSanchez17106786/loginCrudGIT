<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="recursos/css/estilosRegistro.css">
    <title>Document</title>
</head>
<body>
<div id="contenedor">
    <form action="procesos/login/registro.php" method="POST" id="form">
     <div id="divCamposBoton">   
       <input type="text" name="nombre" placeholder="nombre">
       <input type="text" name="apellido" placeholder="Apellido Materno">
       <input type="email" name="email" placeholder="E-mail">
       <input type="text" name="usuario" placeholder="Usuario">
       <input type="password" name="password" placeholder="Contraseña">
       <button id="entrarB">Registrar</button>
     </div>
       <a href="index.php" id="registroLink">Login</a>
       
    </form>

</div>
</body>
</html>