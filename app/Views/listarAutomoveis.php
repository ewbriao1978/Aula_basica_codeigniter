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
    <th> </th>
  </tr>
  <?php

foreach ($dados as $auto){
echo "<tr>  <td> ".$auto['codigo']. "</td>  <td>". $auto['marca']. "</td> <td>".$auto['modelo']."</td> <td>".$auto['km']." </td> <td>". $auto['preco']." </td> 
<td>";
?>

<form method="post" action="/remover">
<input type="hidden" name="id_removed" value="<?=$auto['codigo']?>">   
<button type="submit"> Remover </button>
</form>

<?php
echo "</td> </tr>";
}
?>
</table>


<br><BR>
<br><BR>
<br><BR>
<br><BR>
<br><BR>
