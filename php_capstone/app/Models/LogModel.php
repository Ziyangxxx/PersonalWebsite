<?php

namespace App\Models;

class LogModel extends Model
{
    protected $table = 'log';
    protected $key = 'id';

    /**
     * Function to get 20 latest log records
     * @return Array
     */
    public function getLog()
    {
        $query = "SELECT * FROM log
                  ORDER BY `created_at`
                  DESC
                  LIMIT 20";
        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}