<?php
    namespace Src\Entity;

    use Src\DB\Database;
    use PDO;

    class Tarefa {
        private $id;
        public $descricao;
        public $data;

        public function __construct($descricao = '')
        {
            $this->descricao = $descricao;
        }

        public function cadastrar(){
            $this->data = date('Y-m-d H:i:s');

            $database = new Database('tarefas');

            $cadastro = $database->insert([
                'descricao' => $this->descricao,
                'data' => $this->data
            ]);

            return $cadastro;
        }

        public function consultar($filtro = null){
            $database = new Database('tarefas');

            $consulta = $database->select($filtro)->fetchAll(PDO::FETCH_ASSOC);

            return $consulta;
        }
    }
?>