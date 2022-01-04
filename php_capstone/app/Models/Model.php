<?php

namespace App\Models;

abstract class Model
{
    static protected $dbh;

    /**
     * table name
     * @var string
     */
    protected $table;

    /**
     * primary key name
     * @var string
     */
    protected $key;

    static public function init($dbh)
    {
        self::$dbh = $dbh;
    }

    public function all()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function one($id)
    {
        $query = "SELECT * FROM {$this->table}
                  WHERE {$this->key} = :id";
        $stmt = self::$dbh->prepare($query);
        $params = array(':id' => $id);
        $stmt->execute($params);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}