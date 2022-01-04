<?php

namespace App\Lib;

class DatabaseLogger implements ILogger
{
    static protected $dbh;

    public function __construct($dbh)
    {
        self::$dbh = $dbh;
    }

    /**
     * Save a user in the logs table
     * @param Object $event 
     */
    public function write($event)
    {
        $query = "INSERT INTO log (event) VALUES (:event)";

        $stmt = self::$dbh->prepare($query);

        $params = array(
            ':event' => $event
        );

        $stmt->execute($params);
    } 
}