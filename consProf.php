<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro do Professor</title>
</head>
<body>
<?php
	require_once('conn.php');
	$sql=mysqli_query($conn,"SELECT * FROM tbprof");

	while($linha=mysqli_fetch_array($sql))
	{
		$codprof= $linha['codprof'];
		$nomeprof= $linha['nomeprof'];
		$telprof = $linha['telprof'];
        $emailprof = $linha['emailprof'];
		echo"<br>";

		echo "<table><tr><td>Codigo do Prof: </td><td>$codprof</td></tr>";

			echo "<tr><td>Nome do Professor: </td><td>$nomeprof</td><tr></table>";

			echo "<tr><td>Telefone do Professor: </td><td>$telprof</td><tr></table>";

			echo "<tr><td>Email do Professor: </td><td>$emailprof</td><tr></table>";
	}
?>
</body>	
</html>