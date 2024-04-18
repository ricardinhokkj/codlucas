<?php 

	include_once("Connect.php");

	include_once("Crud.php");


$nome = $_POST['nome'];

$obj = new Crud($conect);

$dado = $obj->readInfoAll($nome);

?>
 <link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
 <main>
   <header> Registro(s)!</header>

<?php


	echo "<table border='1'>";
	echo "<tr> <th>  Nome </th> <th> Idade </th> <th>  E-mail </th> <th> Data </th></tr>";

	foreach($dado as $info){

	echo "<tr>
	<td>".$info['nome']."</td>
	<td>".$info['idade']."</td>
	<td>".$info['email']."</td>
	<td>".$info['data_now']."</td></tr>";

}
?>
</main>