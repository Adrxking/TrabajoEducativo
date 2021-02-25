<?php

namespace app\models;
use app\config\DB;

class librosModel {
    private $db;
    
    public function __construct() {
        $this->$db = new DB();
    }

    public function getAll(){
        $sql = "SELECT * FROM libros";
        $data = $this->db->run($sql, []);
        return $data->fetchAll();
        var_dump ($data->fetchAll());
    }

}
