<?php
  if(!checkLogin()){
    header("Location: index.php?controller=ucp&action=login");
  }else{
    if(!checkAdmin()){
      header("Location: index.php");
    }
  }

  switch ($action) {
    case 'sample':
      $content=get_include_contents('controllers/acp/templates/sample.php');
      break;
    /*
      case to all action needed here...

      case 'action':
        < do something or open something >
        break;
    */
  }

  require ($layout_path);
?>
