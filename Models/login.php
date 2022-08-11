<?php
    class Login{
        private $usuario;
        private $password;

        public function __construct(){
            $this->usuario = "usuario@mail.com";
            $this->password = "usuario123";
        }

        public function login($user, $pass){
            if($user == $this->usuario && $pass == $this->password){
                return true;
            } else{
                return false;
            }
        }
    }
?>