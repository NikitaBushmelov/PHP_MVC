<table style="border: 1;">
    <tr>
    <th>codi</th>
    <th>origen</th>
    <th>desti</th>
    <th>preu</th>
    <th>foto</th>
    <th>nombre_places</th>
    <th>modificar</th>
    <th>eliminar</th>
    <th>afegir_reserva</th>
    
    </tr>
<?php
while($row = $vols->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['codi']."</td>";
    echo "<td>".$row['origen']."</td>";
    echo "<td>".$row['desti']."</td>";
    echo "<td>".$row['preu']."</td>";
    echo "<td>".$row['foto']."</td>";
    echo "<td>".$row['nombre_places']."</td>";
    echo "<td><a href='index.php?controller=vol&action=modificarvols&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=vol&action=eliminarvols&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "<td><a href='index.php?controller=reserva&action=insertarreserva&codi=".$row['codi']."'>Inserta reserva</a></td>";
    echo "</tr>";
}
echo "</table>";