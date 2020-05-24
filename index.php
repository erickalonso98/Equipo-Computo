<?php
    require 'conexion.php';

    session_start();

    if(isset($_POST['usuario'])){
        $usuario = $_POST['usuario'];
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    try{
         $sql = "SELECT usuario,password FROM `usuarios` WHERE usuario='{$usuario}' AND password='{$password}'; ";
         $query = mysqli_query($conn,$sql);
    }catch(Exception $e){
        echo 'Error al ingresar '.$e->getMessage();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <form class="formulario" action="menu.php" method="post">
                <h1>Login</h1>
            <input type="text" class="input" name="usuario" id="usuario" placeholder="Usuario">
            <input type="password" class="input" name="password" id="password" placeholder="Contraseña">
            <input type="submit" value="Iniciar Sesión" class="button">
            <p>¿No tienes cuenta?<a href="registro.php">Registrate</a></p>
        </form>
    </div>
</body>
</html>