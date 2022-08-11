<?php 

  require_once('conn.php');
  $nomeprof = $_POST ['txtNome'];
  $telprof = $_POST ['txtTel'];
  $emailprof = $_POST ['txtEmail'];

  $insere=mysqli_query($conn, "INSERT INTO tbprof(nomeprof,telprof,emailprof) values('$nomeprof','$telprof','$emailprof')") or die (myaqli_error());

  if(mysqli_affected_rows($conn) != 0){
  
  echo"
       <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProf.php'>
       <script type=\"text/javascript\">
       alert(\"Prof cadastrado com sucesso.\");
       </script>

  ";
  }

  else {

      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProf.php'>
       <script type=\"text/javascript\">
       alert(\"Erro ao cadastrar.\");
       </script>

      ";
  }

?>