<?php

require_once ('config.php');

class DB extends mysqli {

    private static $instance;

    public function __construct()
    {
        parent::__construct(DB_HOST_NAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
        $this->set_charset('utf8');
        if($this->connect_error) {
            die("Error: " . $this->connect_error);
        }
    }

    public static function getInstance() {
        if ( self::$instance === null )
            self::$instance = new self();
        return self::$instance;
    }

    public function executeRow($query) {
        $result = $this->query($query);
        $rows = [];
        if ($result->num_rows == 0) {
            return false;
        }
        else{
            while ($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
    }

    public function select($table, array $columns = null, $where = null) {
        $query = 'SELECT ';
        if ($columns) {
            foreach ($columns as $column) {
                $query .= $column;
            }
            $query .= ' FROM ' . $table;
        } else {
            $query .= '* FROM ' . $table;
        }
        if ($where) {
            $query .= ' WHERE ' . $where;
        }
        var_dump($query);
        return $this->executeRow($query);
    }

    public function insert($table, array $columnValue) {
        $lastKey = key(array_slice($columnValue, -1, 1, true));
        $query = 'INSERT INTO ' . $table . '(';
        foreach ($columnValue as $key => $value) {
            $query .= $key;
            if($lastKey != $key) {
                $query .= ', ';
            }
        }
        $query .= ') VALUE(';
        foreach ($columnValue as $key => $value) {
            $query .= '"' . $value . '"';
            if($lastKey != $key) {
                $query .= ',';
            }
        }
        $query .= ');';
        return $this->query($query);
    }

    public function delete($table, $id) {
        $query = 'DELETE FROM ' . $table . ' WHERE id = "' . $id . '";';
        return $this->query($query);
    }

    public function update($table, array $columnValue, $id) {
        $lastKey = key(array_slice($columnValue, -1, 1, true));
        $query = 'UPDATE ' . $table . ' SET ';
        foreach ($columnValue as $key => $value) {
            $query .= $key . ' = "' . $value . '"';
            if($lastKey != $key) {
                $query .= ',';
            }
        }
        $query .= ' WHERE id = "' . $id . '"';
        return $this->query($query);
    }
}
