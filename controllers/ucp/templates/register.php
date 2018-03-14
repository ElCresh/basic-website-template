<br />
<?php
  if(isset($err)){
    switch ($err) {
      case "username_exist":
        ?>
        <div class="alert alert-danger align-center" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>&nbsp
        L'username inserito esiste già. Si prega di inserirne un altro.
        </div>
      <?php
        break;
      case "wrong_mail": ?>
        <div class="alert alert-danger align-center" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>&nbsp
        E-mail non valida. Si prega di verificare che sia stata digitata correttamente.
        </div>
      <?php
        break;
    }
  }
?>

<!--
    Register form here. Remember to point action to index.php with controller UCP and action register_submit
-->