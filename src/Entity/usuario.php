<?php
    namespace Src\Entity;
    require('../../vendor/autoload.php');

    use Src\DB\Database;

    class Usuario {
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

            $insert = $database->insert([
                'nome' => $this->nome,
                'email' => $this->email,
                'senha' => $this->senha
            ]);

            return $insert;
        }
    }