<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['cdusuario']) and !isset($_SESSION['nomeUsuario'])){
    header('Location: login.php');
    exit;
}

$nomeUsuario = $_SESSION['nomeUsuario'];
$cdusuario = $_SESSION['cdusuario'];