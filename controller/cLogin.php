<?php
$entradaCorrecta = true; //Variable que controla el formularo
$codUsuario = null;
$password = null;
$objetoUsuario = null; //Esto es lo que crea cuando el validar usuario va bien
$tituloVentana = "Login"; //Titulo de la ventana
$aErrores = []; //Array que tendra los errores que se mostraran despues

if (isset($_POST["enviar"])) {
    $aErrores["codUsuario"] = validacionFormularios::comprobarAlfaNumerico($_POST["user"], 250, 1, 1);
    $aErrores["password"] = validacionFormularios::comprobarAlfaNumerico($_POST["pass"], 255, 4, 1);
    foreach ($aErrores as $key => $value) {
        if ($value!=null) {
            $entradaCorrecta = false;
        }
    }

    if ($entradaCorrecta) {
        $codUsuario = $_POST["user"];
        $password = hash("SHA256", $codUsuario . $_POST["pass"]);
        $objetoUsuario = UsuarioPDO::validarUsuario($codUsuario, $password);

        if (!is_null($objetoUsuario)) {
            $_SESSION["DAW208POOusuario"] = $codUsuario;
            header("Location: index.php");
        } else {
            $vista = $vistas["login"];
            require_once $vistas["layout"];
        }
    } else {
        $vista = $vistas["login"];
        require_once $vistas["layout"];
    }
} else {
    $vista = $vistas["login"];
    require_once $vistas["layout"];
}