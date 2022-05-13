
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="estilos/index.css">
</head>
<body>

<div class="content">
    <h1><?php  setlocale(LC_TIME,"es_ES");
    echo strftime("Lecturas %B %Y ");
    ?> </h1>
<?php 
require('conf/lecturas.php');
?>
</div>
    
</body>
</html>
  
  



