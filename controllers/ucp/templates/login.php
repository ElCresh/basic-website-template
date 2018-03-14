<br />
<?php
	if(isset($_GET['err']) && $_GET['err'] == 1){
?>
<div class="alert alert-danger align-center" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>&nbsp
  Dati di login errati
</div>
<?php	} ?>

<!--
    Login form here. Remember to point action to index.php with controller UCP and action login_submit
-->