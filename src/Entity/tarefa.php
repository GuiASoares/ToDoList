<?php
    namespace Src\Entity;

    use Src\DB\Database;

    class Tarefa {
        public $id;
        public $descricao;
        public $data;

        public function __construct($descricao)
        {
            $this->descricao = $descricao;
        }

        public function cadastrar(){
            $this->data = date('Y-m-d H:i:s');

            $database = new Database('tarefa');
        }
    }
?>