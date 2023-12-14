<?php

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
	
	// USER ROUTES
	case "/main":
		$active_page='views\user\main.php';
		break;
	// case "/catalog":
	// 	$active_page= 'viewes/user/catalog.php';
	// 	break;
	// case "/rules":
	// 	$active_page= 'viewes/user/rules.php';
	// 	break;
	// case "/login":
	// 	$active_page= 'viewes/user/login.php';
	// 	break;
	// case "/registration":
	// 	$active_page= 'viewes/user/registration.php';
	// 	break;
	// case "/item1":
	// 	$active_page= 'viewes/user/item.php';
	// 	break;
	// case "/User_login":
	// 	$active_page= 'viewes/user/login.php';
	// 	break;
	// case "/User_registration":
	// 	$active_page= 'viewes/user/login.php';
	// 	break;

		// ADMIN ROUTES
    case "/Admin":
        $active_page= 'app\utils\Admin.php';
        break;
	case "/shield":
		$active_page= 'views\admin\shield.php';
		break;
	case "/adminka":
		$active_page= 'MainAdmin.php';
		break;
		case "/User_registration":
			$active_page= 'register.php';
			break;
			case "/User_login":
				$active_page= 'views\admin\adminka.php';
				break;
			// case "/Redact_user":
			// 	$active_page= 'tables.php';			 
			// 	break;
					
		
			       
				
		
	


	default:
		$active_page= 'views\user\main.php';
		break;

}