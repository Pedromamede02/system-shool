<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro do Dici</title>
</head>
<body>
<?php
	require_once('conn.php');
	$sql=mysqli_query($conn,"SELECT * FROM tbdici");

	while($linha=mysqli_fetch_array($sql))
	{
		$coddici=$linha['coddici'];
		$nomedici=$linha['nomedici'];
		echo"<br>";

		echo "<table><tr><td>Codigo da Diciplina: </td><td>$coddici</td></tr>";

			echo "<tr><td>Nome da Diciplina: </td><td>$nomedici</td><tr></table>";
	}
?>
</body>	
</html>