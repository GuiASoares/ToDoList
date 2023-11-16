<?php
    namespace Src\Entity;
    require('../../vendor/autoload.php');

    use Src\DB\Database;

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

            $consulta = $database->select('email="'.$this->email.'" AND senha="'.$this->senha.'"')->fetchObject();

            $this->nome = $consulta->nome;
            $this->id = $consulta->id;

            if(!$consulta){
                return false;
            } else {
                return true;
            }
        }
    }