<?php
require("agregarUsuario.php");
require("buscarUsuarioPorEmail.php");


$usuarios=[];
$usuarios=agregarUsuario($usuarios,"Pablo","45","pgilberti@gmail.com");
$usuarios=agregarUsuario($usuarios,"juan","45","pgilberti@gmail.com");
$usuarios=agregarUsuario($usuarios,"mario","45","pgilberti@gmail.com");
$usuarios=agregarUsuario($usuarios,"peteco","45","pgilberti@gmail.com");
var_dump($usuarios);