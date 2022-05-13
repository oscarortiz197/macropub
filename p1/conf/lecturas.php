<?php

//if 

require_once('confg.php');



    $query="select l.fecha,l.Lectura,u.nombre  from lecturas as l INNER JOIN usuarios u on l.Codigo_Empleado=u.Codigo_Empleado;";
    
    $result=$mysql->query($query);
   echo "<table class='tabla'>";
   echo "<tr>";

   echo " <th>Fecha </th>";

   echo "<th>Lectura </th>";

   echo " <th>Consumo</th>";

   echo " <th>Empledo</th>";
   echo "</tr>";
    if ($mysql->affected_rows>0){
        $cantidad=0.0;
        $total=0.0;
            while ($row=$result->fetch_array()){
            echo " <tr class='line'>";
                
                echo " <td> ",$row['fecha']," </td>";

                echo "<td>",$row['Lectura']," </td>";
             
                echo " <td>",($row['Lectura']-$cantidad)," </td>";
             
                echo " <td>",$row['nombre'],"</td>";
                $total+=$row['Lectura']-$cantidad;
               $cantidad=$row['Lectura'];
             
             
              

            echo"<tr>";
        }
            echo "<h2> consumo total del mes: ",$total,"</h2>";
           
    }else{
         echo 'sin datos';
        }
    
echo "</table>";

    
    $result->close();
    $mysql->close();


?>
