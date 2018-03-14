<?php
  if(!checkLogin()){
    if(isset($_POST['user']) && isset($_POST['password'])){
      $action='check';
    }else if($action != "register" && $action != "register_submit"){
      $action='login';
    }
  }else{
    if($action == "login" || $action == "check"){
      $action = "view";
    }

    /*****************************
     * Deny access to all service for banned accounts if you want here
     * 
     * SAMPLE:
     * if(banned_condition){
     *  $action = "view";
     * }
     ****************************
    */
  }

  switch ($action) {
    case 'sample':
      $content=get_include_contents('controllers/ucp/templates/sample.php');
      break;
    case 'login':
      $content=get_include_contents('controllers/ucp/templates/login.php');
      break;
    case 'login_submit':
      if(login(___){
        header("location: index.php?controller=ucp&action=view");
      }else{
        header("location: index.php?controller=ucp&action=login&err=1");
      }

      break;
    case 'register':
      $content=get_include_contents('controllers/ucp/templates/register.php');
      break;
    case 'register_submit':
      // check if user already exist
      if(CONDITION_FOR_REPLICATED_USER)){
        if(strpos($_POST['email'],'@')){
          
          // here save user data to DB
          
        }else{
          $err = "wrong_mail";
        }
      }else{
        $err = "username_exist";
      }

      $content=get_include_contents('controllers/ucp/templates/register.php');
      break;
    case 'logout':
      //Destroy session
      session_unset();
      session_destroy();

      header("location: index.php");
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
