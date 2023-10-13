<?php 
    namespace Src\DB;

    use PDO;
    use PDOException;
    use Src\Common\Environment;

    Environment::load('../..');

    class Database {
        private $table;

        private $connection;

        public function __construct($table)
        {
            $this->table = $table;
            $this->connect();
        }

        private function connect(){
                try{
                $this->connection = new PDO('mysql:host='.getenv('DB_HOST').';dbname='.getenv('DB_NAME'), getenv('USER'), getenv('PASSWORD'));
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Sucesso!';
            } catch (PDOException $e) {
                die ('ERROR: '. $e->getMessage());
            }
        }

        private function execute($query, $params = []){
            try{
                $statement = $this->connection->prepare($query);
                $statement->execute($params);
            } catch (PDOException $e){
                die ('ERROR: '. $e->getMessage());
            }
        }

        public function insert($values){

        }
    }
?>