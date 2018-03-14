<?php
  switch ($action) {
    case 'sample':
      $content=get_include_contents('controllers/sample/templates/sample.php');
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