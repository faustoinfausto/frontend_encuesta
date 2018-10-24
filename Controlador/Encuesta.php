<?php

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

include "./Encuesta_opciones.php";