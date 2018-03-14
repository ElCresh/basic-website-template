<?php
  function get_include_contents ($filename) {
		if (is_file($filename)) {
			extract($GLOBALS, EXTR_REFS);
			ob_start();
			include $filename;
			return ob_get_clean();
		}
		return false;
	}

  function login(___){
    /*
     * Login logic here
     * 
     * Remember to set $_SESSION['login'] = true; 
     * otherwise other function won't work
     * 
     * For admin also set $_SESSION['admin'] = true;
     * and for user $_SESSION['admin'] = false;
    */
	}

  function checkLogin(){
		if (!(isset($_SESSION['login']))){
			return false;
		} else {
			return true;
		}
	}

  function checkAdmin(){
    if (!($_SESSION['admin'])) {
  		return false;
  	} else {
  		return true;
  	}
  }
?>
