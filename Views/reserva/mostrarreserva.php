<table style="border: 1;">
    <tr>

    <th>Codi_Vol</th>
    <th>Codi_Usuari</th>
    <th>Data_anada</th>
    <th>Data_tornada</th>
    <th>nombre_places</th>
    <th>Modificar_reserva</th>
    <th>Eliminar_reserva</th>    
    <th>Pagar_ticket</th>

    </tr>
<?php
while($row = $reservas->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['codi_vol']."</td>";
    echo "<td>".$row['codi_usuari']."</td>";
    echo "<td>".$row['data_anada']."</td>";
    echo "<td>".$row['data_tornada']."</td>";
    echo "<td>".$row['nombre_places']."</td>";
    echo "<td><a href='index.php?controller=usuari&action=modificarusuari&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=usuari&action=eliminarusuari&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "<td><a href='index.php?controller=ticket&action=pagarticket&codi=".$row['codi']."'>Pagar</a></td>";
    echo "</tr>";
}
echo "</table>";