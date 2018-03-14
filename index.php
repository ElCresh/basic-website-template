<?php
  session_start();

  require ("classes/sample.class.php");
  // other class here...

  require ("configs/db.php");
  // other configs here...

  require ("functions/lib.php");
  // other libs here...

  /* Layout selection */
  
  // can alse be used a case/switch if more complex logic is required
  if(LAYOUT_SWITCH_LOGIC)){
    $layout_path = "templates/layout_beta.php";
  }else{
    $layout_path = "templates/layout.php";
  }
  /********************/

  if (isset($_REQUEST['controller']))
    $controller=$_REQUEST['controller'];
  if (isset($_REQUEST['action']))
    $action=$_REQUEST['action'];
  if (empty($controller) || empty($action)) {
    // default controller/action
    $controller='sample';
    $action='sample';
  }

  switch (strtolower($controller)) {
    case 'sample':
      require ('controllers/sample/actions.php');
      break;
    case 'ucp':
      require ('controllers/ucp/actions.php');
      break;
    case 'acp':
      require ('controllers/acp/actions.php');
      break;

    /*
      case to all controller needed here...

      case 'controller':
        require (<path to action file>);
        break;
    */
  }
?>