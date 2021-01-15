<?php

if (isset($_REQUEST["salir"])) {
    unset($_SESSION['DAW208POOusuario']);
    header("location: index.php");
} else {
    $nVisitas = $_SESSION["DAW208POOvisitas"]["NumConexiones"];
    $ultimaFecha = new DateTime($_SESSION["DAW208POOvisitas"]["FechaHoraUltimaConexion"]);
    
    if ($nVisitas == 1) {
        $mensaje = "Bienvenido por primera vez " . $_SESSION["DAW208POOvisitas"]["DescUsuario"];
    } elseif ($nVisitas >=2) {
        $mensaje = "Bienvenido " . $_SESSION["DAW208POOvisitas"]["DescUsuario"] .". Has visitado la web " . $nVisitas . " veces. Tu ultima visita fue el " . $ultimaFecha->format("d-m-Y H:i:s");
    }


    $vista = $vistas['inicio']; //le digo al controlador la vista de inicio
    $tituloVentana = "Inicio";
    require_once $vistas['layout']; //ESTO VA LO ULTIMO!
}