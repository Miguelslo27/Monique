	<div class="modal-bg"></div>
	<div class="modal-cont">
<?php

$appPlace = $GLOBALS['appPlace'];
$appSubPlace = $GLOBALS['appSubPlace'];
$userStats = $GLOBALS['userStats'];
$templatesPath = $GLOBALS['config']['templatesPath'];

switch($userStats['status']) {

	case 'NO_USERS':

		include($templatesPath . 'modals/superuser-register.php');

	break;
	case 'READY_TO_LOGIN':
	case 'USER_DOESNT_EXIST':
	case 'ERROR_EMAIL_OR_PASS':
	
		include($templatesPath . 'modals/login.php');

	break;

}

switch($appSubPlace) {

	case 'register':

		include($templatesPath . 'modals/login.php');

	break;
	case 'pedido-actual':

		include($templatesPath . 'modals/confirmar-pedido.php');
		include($templatesPath . 'modals/compra-menor-al-limite.php');

	break;

}

switch($appPlace) {

	case 'categories':

		if ($userStats['user'] && $userStats['user']->administrador == 1) {

			$categories = $GLOBALS['categories'];
			$category = $GLOBALS['category'];

			include($templatesPath . 'modals/new-category.php');
			include($templatesPath . 'modals/new-article.php');
			include($templatesPath . 'modals/delete-category.php');
			include($templatesPath . 'modals/delete-article.php');

		} else if (!$userStats['user']) {

			include($templatesPath . 'modals/accesso-restringido.php');

		} else {

			include($templatesPath . 'modals/mensaje-nueva-forma-compra.php');
			
		}

	break;

// case 'home':

// 	if ($userStats['user']) {

// 		switch($userStats['status']) {

// 		case 'REGISTER_SUCCESS':

// 			if ($appSubPlace == "register") {
// 				include($templatesPath . 'reg-success.php');
// 			}

// 		break;
// 		case 'LOGGED':

// 			if ($appSubPlace == "register" || $appSubPlace == "login") {
// 				include($templatesPath . 'justlogged.php');
// 			}

// 		break;

// 		}

// 	} else {

// 		switch($userStats['status']) {

// 		case 'NO_USERS':

// 			include($templatesPath . 'modals/superuser-register.php');

// 		break;
// 		case 'READY_TO_LOGIN':
// 		case 'USER_DOESNT_EXIST':

// 			include($templatesPath . 'modals/login.php');

// 		break;
// 		case 'NO_DATA_SETTED':

// 			include($templatesPath . 'reg-without-content.php');

// 		break;
// 		case 'ERROR_EMAIL_OR_PASS':

// 			include($templatesPath . 'erroruserorpass.php');

// 		break;
// 		case 'LOGGED_OUT':

// 			if ($appSubPlace == "logout") {
// 				include($templatesPath . 'logout.php');
// 			}

// 		break;
// 		case 'READY_TO_REGISTER':

// 			include($templatesPath . '/modals/register.php');

// 		break;

// 		}

// 	}

// 	include($templatesPath . 'home/slide.php');

// break;

}

?>
</div>