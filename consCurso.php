<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro do Curso</title>
</head>
<body>
<?php
	require_once('conn.php');
	$sql=mysqli_query($conn,"SELECT * FROM tbcurso");

	while($linha=mysqli_fetch_array($sql))
	{
		$codcurso=$linha['codcurso'];
		$nomecurso=$linha['nomecurso'];
		echo"<br>";

		echo "<table><tr><td>Codigo do Curso: </td><td>$codcurso</td></tr>";

			echo "<tr><td>Nome do Curso: </td><td>$nomecurso</td><tr></table>";
	}
?>
</body>	
</html>