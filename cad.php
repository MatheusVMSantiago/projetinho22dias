<?php

include("Usuario.php");

$usuario = new Usuario();

$usuario->setLogin($_GET['login']);

$usuario->cadastrarUsuario();


