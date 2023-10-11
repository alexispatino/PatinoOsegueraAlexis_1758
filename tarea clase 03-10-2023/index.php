<?php include 'head.html'; ?>

<form action="resultado.php" method="get">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br> 

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required><br>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required><br>

    <input type="submit" value="Enviar">
    
</form>