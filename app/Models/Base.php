<?php
namespace Todo\Models;

use DB;

class Base
{
    protected static $tableName;

    public function __construct(){}

    public function create($attributes){
        $table = self::$tableName;

        $db = DB::getInstance();

        $keys = "";
        $values = "";

        foreach ($attributes as $key => $value){
            $keys = $keys.$key.",";
            $values = $values."\"$value\"".",";
        }
        $keys =  substr($keys, 0, -1);
        $values = substr($values, 0, -1);

        $query = "INSERT INTO ${table} (${keys}) VALUES (${values})";

        $stmt = $db->prepare($query);

        return $stmt->execute();
    }

    public function update($id, $attributes){
        $table = self::$tableName;

        $db = DB::getInstance();

        $col = "";

        foreach ($attributes as $key => $value){
            $col = $col."$key = \"$value\"".",";
        }

        $col =  substr($col, 0, -1);

        $query = "UPDATE ${table} ".
                  "SET ${col}".
                  "WHERE id = ${id}";

        $stmt = $db->prepare($query);

        return $stmt->execute();
    }

    public function delete($id){
        $table = self::$tableName;

        $db = DB::getInstance();

        $query = "DELETE FROM ${table} WHERE id = ${id}";

        $stmt = $db->prepare($query);

        return $stmt->execute();
    }

    public function find($id){
        $table = self::$tableName;
        $db = DB::getInstance();
        $query = "SELECT * FROM ${table} WHERE id = ${id}";

        $stmt = $db->prepare($query);

        $PDO = DB::$PDO;
        $stmt->setFetchMode($PDO::FETCH_OBJ);

        $stmt->execute();

        $result = $stmt->fetch();

        return $result;
    }

    public function all(){
        $table = self::$tableName;
        $db = DB::getInstance();
        $query = "SELECT * FROM ${table}";

        $stmt = $db->prepare($query);

        $PDO = DB::$PDO;
        $stmt->setFetchMode($PDO::FETCH_ASSOC);

        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
    }
}