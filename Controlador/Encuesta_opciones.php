<?php

switch ($action) {
	case 'load':
		include '../Vista/cont_encuesta.php';
		break;
	default:
		include '../Vista/new_encuesta.php';
		break;
}