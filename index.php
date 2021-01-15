<?php 
require_once './config/config.php';
require_once './config/configDB.php';

session_start();
if (isset($_SESSION["DAW208POOusuario"])){
	if (isset($_REQUEST["pagina"])){
		require_once $controladores[$_REQUEST["pagina"]];
	} else {
		require_once $controladores["inicio"];
	}
} else {
	require_once $controladores["login"];
}
