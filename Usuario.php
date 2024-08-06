<?php

class Usuario {

private $login;

public function getLogin() {
    return $this->login;    
}

public function setLogin($login) {
   $this->login = $login;
}

public function cadastrarUsuario() {
    "INSERT INTO tb_user (login)
        VALUES (getLogin())" ;
    
}

}