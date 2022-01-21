<table style="border: 1;">
    <tr>
    <th>Origen</th>
    <th>Desti</th>
    <th>Data_anada</th>
    <th>Data_tornada</th>
    <th>Num_de_places</th>
    <th>Preu_vol</th>
    <th>Preu_total</th>
    <th>Data_ticket</th>
    </tr>
<?php
while($row = $tickets->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['origen']."</td>";
    echo "<td>".$row['desti']."</td>";
    echo "<td>".$row['data_anada']."</td>";
    echo "<td>".$row['data_tornada']."</td>";
    echo "<td>".$row['num_places']."</td>";
    echo "<td>".$row['preu']."</td>";
    echo "<td>".$row['total']."</td>";
    echo "<td>".$row['data_ticket']."</td>";
    echo "</tr>";
}
echo "</table>";