<?php

//functions.php

//copied into family-tree from family 5/7/16

function AmILoggedIn() {

	if(isset($_SESSION['IsLoggedIn']) && $_SESSION['IsLoggedIn']) {

		return true;

	} else {

		return false;

	}

}



function AmIAdmin() {

	if(isset($_SESSION['User_Role']) && $_SESSION['User_Role'] == "ADMIN") {

		return true;

	} else {

		return false;

	}

}



//Added 11/26/13
function logout()

{

	$_SESSION = array(); //destroy all of the session variables

	session_destroy();

}



    function checkpage($currpage, $linkpage) {

    if($currpage == $linkpage) {

      return " class=\"active\"";

    }  else {

      return " class=\"\"";

    }



    }

