<table style="border: 1;">
    <tr>
    <th>Nom</th>
    <th>Correu</th>
    <th>Telefon</th>
    <th>modificar</th>
    <th>eliminar</th>
    
    </tr>
<?php
while($row = $usuaris->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['nom']."</td>";
    echo "<td>".$row['correu']."</td>";
    echo "<td>".$row['telefon']."</td>";
    echo "<td><a href='index.php?controller=usuari&action=modificarusuari&codi=".$row['codi']."'>Modificar</a></td>";
    echo "<td><a href='index.php?controller=usuari&action=eliminarusuari&codi=".$row['codi']."'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";