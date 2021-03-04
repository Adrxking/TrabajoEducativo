<?php

namespace App\Models;
use App\Config\DB;

class editoresModel {
    private static $DB;

    public static function conexionDB() {
        editoresModel::$DB = new DB();
    }

    public static function getAll() {
        editoresModel::conexionDB();
        $sql = "SELECT * FROM EDITORES";
        $data = editoresModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

}