<?php

namespace App\Models;
use App\Config\DB;

class librosModel {
    private static $DB;
    
    public static function conexionDB() {
        librosModel::$DB = new DB();
    }

    public static function getAll(){
        librosModel::conexionDB();
        $sql = "SELECT * FROM libros";
        $data = librosModel::$DB->run($sql, []);
        return $data->fetchAll();
       
    }

}
