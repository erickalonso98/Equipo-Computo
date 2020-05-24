<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="contenedor">
        <form class="formulario" action="" method="post">
                <h1>Registrate</h1>
            <input type="text" class="input" name="usuario" id="usuario" placeholder="Nuevo Usuario">
            <input type="password" class="input" name="password" id="password" placeholder="Nueva Contraseña">
            <input type="password" class="input" name="password_inf" id="password" placeholder="Confirmar Contraseña">
            <input type="submit" value="Registrarse Ahora" class="button">
            <p>¿Ya tienes cuenta?<a href="index.php">Login</a></p>
        </form>
    </div>
</body>
</html>