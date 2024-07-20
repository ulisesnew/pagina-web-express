<?php

require 'conexion.php'; 


$sql = "SELECT * FROM usuarios";


$result = mysqli_query($db,$sql);


echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Usuario</th><th>Correo</th><th>Contraseña</th></tr>"; 

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['idUsuarios'] . "</td>"; 
    echo "<td>" . $row['Nombre'] . "</td>";
    echo "<td>" . $row['Apellido'] . "</td>";
    echo "<td>" . $row['Usuario'] . "</td>";
    echo "<td>" . $row['Correo'] . "</td>";
    echo "<td>" . $row['Contraseña'] . "</td>";
    echo "</tr>";
}
echo "</table>";


mysqli_close($db);
?>
