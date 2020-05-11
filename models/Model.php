<?php

require_once ('../config/DB.php');

class Model {

    protected $db;
    protected $table;

    public function __construct() {
        $this->db = DB::getInstance();
    }

    public function select(array $columnValue = null, $where = null) {
        return $this->db->select($this->table, $columnValue, $where);
    }

    public function create(array $columnValue) {
        return $this->db->insert($this->table, $columnValue);
    }
}