<h2> Dados dos automóveis </h2>

<?php

foreach ($dados as $auto){
    echo "codigo:".$auto['codigo']."<br>";
    echo "marca:".$auto['marca']."<br>";
    echo "modelo:".$auto['modelo']."<br>";
    echo "km:".$auto['km']."<br>";
    echo "preco:".$auto['preco']."<br>";
}
?>

<table>
  <tr>
    <th>Codigo</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Km</th>
    <th>Preco</th>
  </tr>
  <?php

foreach ($dados as $auto){
echo "<tr>  <td> ".$auto['codigo']. "</td>  <td>". $auto['marca']. "</td> <td>".$auto['modelo']."</td> <td>".$auto['km']." </td> <td>". $auto['preco']." </td>    </tr>";
}
?>
</table>

