<?php 
require_once 'config/config.php';

session_start();

require_once 'config/confDBPDO.php';
require_once 'config/lang.php';

if (isset($_SESSION["usuarioDAW204LoginLogoffMulticapaPOO"])){
    require_once $controladores["inicio"];
} else {
    require_once $controladores["login"];
}