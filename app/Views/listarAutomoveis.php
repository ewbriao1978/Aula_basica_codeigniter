<h2> Dados dos automóveis </h2>

<?php
if (session()->get('success')){
    echo "<strong>". session()->getFlashdata('success')."</strong>";
}
if (session()->get('success_remove')){
    echo "<strong>". session()->getFlashdata('success_remove')."</strong>";
}
if (session()->get('success_updating')){
  echo "<strong>". session()->getFlashdata('success_updating')."</strong>";
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

</td><td>

<form method="get" action="/formupdate/<?=$auto['codigo']?>">
<button type="submit"> Editar </button>
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
