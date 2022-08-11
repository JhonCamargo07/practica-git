<?php
    $login = new Login();

    $user = "usuario@mail.com";
    $pass = "usuario123";

    if($login->login($user, $pass)){
        echo "Bienvenido";
    }else{
        echo "Datos erroneos";
    }
?>