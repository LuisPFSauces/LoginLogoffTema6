<?php

//require_once 'model/UsuarioPDO.php';

class Usuario {

    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaHoraUltimaConexion;
    private $perfil;
    private $imagenPerfil;

    function __construct($codUsuario, $password, $descUsuario, $numConexiones, $fechaHoraUltimaConexion, $perfil, $imagenPerfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numConexiones = $numConexiones;
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        $this->perfil = $perfil;
        $this->imagenPerfil = $imagenPerfil;
    }

    function getCodUsuario() {
        return $this->codUsuario;
    }

    function getPassword() {
        return $this->password;
    }

    function getDescUsuario() {
        return $this->descUsuario;
    }

    function getNumConexiones() {
        return $this->numConexiones;
    }

    function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getImagenPerfil() {
        return $this->imagenPerfil;
    }

    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }

    function setNumConexiones($numConexiones) {
        $this->numConexiones = $numConexiones;
    }

    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion) {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setImagenPerfil($imagenPerfil) {
        $this->imagenPerfil = $imagenPerfil;
    }

    /*
    public static function validarUsuario($codUsuario, $password) {
        $usuario = null;
        $aUsuario = UsuarioPDO::validarUsuario($codUsuario, $password);
        if (!empty($aUsuario)) {
            $usuario = new Usuario($codUsuario, $aUsuario["Password"], $aUsuario["DescUsuario"], $aUsuario["NumConexiones"], $aUsuario["FechaHoraUltimaConexion"], $aUsuario["Perfil"], $aUsuario["ImagenUsuario"]);
        }
        return $usuario;
    }

    public static function modificarUsuario() {
        $usuarioEditado = UsuarioPDO::modificarUsuario($this->codUsuario, $this->password, $this->descUsuario);
        return $usuarioEditado;
    }

    public static function borrarUsuario($codUsuario) {
        $borrado = UsuarioPDO::borrarUsuario($codUsuario);
        return $borrado;
    }

    public static function registrarUltimaConexion($codUsuario) {
        setlocale(LC_TIME, 'es_ES.UTF-8'); //Idioma
        date_default_timezone_set('Europe/Madrid');
        
        return UsuarioPDO::registrarUltimaConexion($codUsuario);
    }
*/
}
