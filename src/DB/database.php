<?php
    require('../../src/Common/environment.php');

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
            } catch (PDOException $e) {
                die ('ERROR: '. $e->getMessage());
            }
        }

        private function execute($query, $params = []){
            try{
                $statement = $this->connection->prepare($query);
                $statement->execute($params);
                return $statement;
            } catch (PDOException $e){
                die ('ERROR: '. $e->getMessage());
            }
        }

        public function insert($values){
            $fields = array_keys($values);
            $binds = array_pad([], count($fields), '?');

            $query = 'INSERT INTO ' .$this->table. '(' .implode(',', $fields). ') VALUES (' .implode(',', $binds). ')';

            $this->execute($query, array_values($values));

            return true;
        }

        public function select($where = null, $order = null, $limit = null, $fields = '*'){
            $where = !empty($where) ? 'WHERE ' .$where : '';
            $order = !empty($order) ? 'ORDER BY ' .$order : '';
            $limit = !empty($limit) ? 'LIMIT ' .$limit : '';

            $query = 'SELECT ' .$fields. ' FROM ' .$this->table. ' ' .$where. ' ' .$order. ' ' .$limit;

            return $this->execute($query);
        }

        public function update($values, $where = null){
            $fields = array_keys($values);

            $where = !empty($where) ? 'WHERE ' .$where : '';

            $query = 'UPDATE ' .$this->table. ' SET ' .implode('=?,', $fields). '=? ' .$where;

            $this->execute($query, array_values($values));

            return true;
        }

        public function delete($where = ''){
            $where = !empty($where) ? 'WHERE ' .$where : '';

            $query = 'DELETE FROM ' .$this->table. ' ' .$where;

            $this->execute($query);

            return true;
        }
    }
?>