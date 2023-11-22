<?php
    require('../../src/DB/database.php');

    class Usuario {
        public $id;
        public $nome;
        public $email;
        private $senha;

        public function __construct($nome, $email)
        {
            $this->nome = $nome;
            $this->email = $email;
        }

        public function __set($name, $value)
        {
            $this->$name = $value;
        }

        public function registrarUsuario(){
            $database = new Database('usuarios');

            $checagemEmail = $database->select('email="'.$this->email.'"')->fetchObject();
            if($checagemEmail){
                return false;
            }

            $options = ['cost' => 12];
            $this->senha = password_hash($this->senha, PASSWORD_BCRYPT, $options);

            $database->insert([
                'nome' => $this->nome,
                'email' => $this->email,
                'senha' => $this->senha
            ]);

            $this->id = $database->select('email="'.$this->email.'"','','','id')->fetchObject()->id;

            return true;
        }

        public function entrarUsuario(){
            $database = new Database('usuarios');

            $consulta = $database->select('email="'.$this->email.'"')->fetchObject();

            if(!$consulta){
                return false;
            } else if(password_verify($this->senha, $consulta->senha)) {
                $this->nome = $consulta->nome;
                $this->id = $consulta->id;
                return true;
            } else {
                return false;
            }
        }
    }