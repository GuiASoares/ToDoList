<?php
    namespace Src\Entity;

    use Src\DB\Database;
    use PDO;

    class Tarefa {
        private $id;
        public $descricao;
        public $data;
        public $situacao;

        public function __construct($descricao = '', $id = '')
        {
            $this->descricao = $descricao;
            $this->id = $id;
        }

        public function cadastrar(){
            date_default_timezone_set('America/Sao_Paulo');
            $this->data = date('Y-m-d H:i:s');

            echo $this->data;

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

        public function mudarSituacao(){
            $database = new Database('tarefas');

            $consulta = $database->select('id="'.$this->id. '"', '', '', 'situacao')->fetchObject();

            print_r($consulta);

            $this->situacao = $consulta->situacao == 'pendente' ? 'concluido' : '';

            $database->update(['situacao' => $this->situacao], 'id="'.$this->id. '"');

            return true;
        }

        public function excluirTarefa(){
            $database = new Database('tarefas');

            $database->delete('id="'.$this->id.'"');

            return true;
        }

        public function atualizarTarefa(){
            date_default_timezone_set('America/Sao_Paulo');
            $this->data = date('Y-m-d H:i:s');

            $database = new Database('tarefas');

            $database->update(['descricao' => $this->descricao, 'data' => $this->data], 'id='.$this->id);

            return true;
        }
    }
?>