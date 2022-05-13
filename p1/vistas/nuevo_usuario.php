<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
    <link rel="stylesheet" href="../estilos/usuario.css">

</head>
<body>
   <div class="cont">
       <h1>Nuevo Empleado</h1>
<form action="../conf/usuarios.php" method="POST">
<p>Codigo de Empleado:</p>
<input type="text" name="Codigo_Empleado">
<p>Nombre: </p>
<input type="text" name="Nombre">
<p>Apellido: </p>
<input type="text" name="Apellido">
<p>Contraseña:</p>
<input type="text" name="Clave">

<input type="submit" name="" value="Guardar">
</form>
</div>

</body>