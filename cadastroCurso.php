<?php 

  require_once('conn.php');
  $nomecurso = $_POST ['txtNome'];

  $insere=mysqli_query($conn, "INSERT INTO tbcurso(nomecurso) values('$nomecurso')") or die (myaqli_error());

  if(mysqli_affected_rows($conn) != 0){
  
  echo"
       <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCurso.php'>
       <script type=\"text/javascript\">
       alert(\"Curso cadastrado com sucesso.\");
       </script>

  ";
  }

  else {

      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCurso.php'>
       <script type=\"text/javascript\">
       alert(\"Erro ao cadastrar.\");
       </script>

      ";
  }

?>