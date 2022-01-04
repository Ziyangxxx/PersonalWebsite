<?php

namespace App\Models;

class AdminModel extends Model
{

    protected $table = 'projects';
    protected $key = 'id';
    protected $post = [];
    protected $errors = [];
    
    /**
     * Count projects' number
     * @param Table $var
     * @return Int
     */
    public function count($var)
    {
        $query = "SELECT COUNT(*)
                  FROM $var";
        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Get lastest date
     * @param Table $var
     * @return Int
     */
    public function latest($var)
    {
        $query = "SELECT MAX(created_year)
                  FROM $var";
        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Get earliest date
     * @param Table $var
     * @return Int
     */
    public function earliest($var)
    {
        $query = "SELECT MIN(created_year)
                  FROM $var";
        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Added a new project
     * @param Array
     * @return Int
     */
    public function saveProject()
    {
        $query = "INSERT INTO projects
                  (name,
                   image,
                   category_id,
                   tools,
                   discription,
                   created_year,
                   created_location,
                   status)
                   VALUE
                  (:name,
                   :image,
                   :category_id,
                   :tools,
                   :discription,
                   :created_year,
                   :created_location,
                   :status)";
        $stmt = self::$dbh->prepare($query);
        $params = array(
            ':name' => $_POST['name'],
            ':image' => $_POST['image'],
            ':category_id' => $_POST['category'],
            ':tools' => $_POST['tools'],
            ':discription' => $_POST['description'],
            ':created_year' => $_POST['created_year'],
            ':created_location' => $_POST['created_location'],
            ':status' => $_POST['status']
        );
        $stmt->execute($params);
        return self::$dbh->lastInsertId();
    }

    /**
     * Delete a project based on id
     * @param int $delete_id
     * @return int affected rows
     */
    function deleteProject($delete_id)
    {
        $query = "DELETE FROM
                    projects
                    WHERE
                    id = :delete_id";

        $stmt = self::$dbh->prepare($query);

        $params = array(':delete_id' => $delete_id);

        $stmt->execute($params);

        return $stmt->rowCount();
    }

    /**
     * Added a new project
     * @param Array
     * @return Int
     */
    public function updateProject()
    {
        $query = "UPDATE projects
                  SET
                  name = :name,            
                  image = :image,
                  category_id = :category_id,
                  tools = :tools,
                  discription = :discription,
                  created_year = :created_year,
                  created_location = :created_location,
                  status = :status
                  WHERE
                  id = :id";
        $stmt = self::$dbh->prepare($query);
        $params = array(
            ':name' => $_POST['name'],
            ':image' => $_POST['image'],
            ':category_id' => $_POST['category'],
            ':tools' => $_POST['tools'],
            ':discription' => $_POST['description'],
            ':created_year' => $_POST['created_year'],
            ':created_location' => $_POST['created_location'],
            ':status' => $_POST['status']
        );
        $stmt->execute($params);
    }

}