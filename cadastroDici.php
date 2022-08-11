<?php 

  require_once('conn.php');
  $nomedici = $_POST ['txtNome'];

  $insere=mysqli_query($conn, "INSERT INTO tbdici(nomedici) values('$nomedici')") or die (myaqli_error());

  if(mysqli_affected_rows($conn) != 0){
  
  echo"
       <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDici.php'>
       <script type=\"text/javascript\">
       alert(\"Diciplina cadastrado com sucesso.\");
       </script>

  ";
  }

  else {

      echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDici.php'>
       <script type=\"text/javascript\">
       alert(\"Erro ao cadastrar.\");
       </script>

      ";
  }

?>