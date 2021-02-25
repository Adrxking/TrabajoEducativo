<?php

namespace App\Models;
use App\Config\DB;

class categoriasModel {
    private static $DB;
    
    public static function conexionDB() {
        categoriasModel::$DB = new DB();
    }

    public static function getAll(){
        categoriasModel::conexionDB();
        $sql = "SELECT * FROM categorias";
        $data = categoriasModel::$DB->run($sql, []);
        return $data->fetchAll();
       
    }

}