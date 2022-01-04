<?php

namespace App\Models;

class ProjectsModel extends Model
{

    protected $table = 'projects';
    protected $key = 'id';

    /**
     * Function to get all projects
     * @return array
     */
    public function getAll()
    {
        $query = 'SELECT projects.*,
                    category.name as cat_name
                    FROM
                    projects
                    JOIN category ON projects.category_id = category.id
                    ORDER BY projects.id
                    ASC';
        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Function to get one project
     * @param int $projects_id
     * @return array
     */
    public function getOne($projects_id)
    {
        $query = 'SELECT projects.*,
                    category.name as cat_name
                    FROM
                    projects
                    JOIN category ON projects.category_id = category.id
                    WHERE projects.id = :projects_id';
        $stmt = self::$dbh->prepare($query);
        $params = array(':projects_id' => $projects_id);
        $stmt->execute($params);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Function to get all projects from one category
     * @param int $category_id
     * @return array
     */
    public function getOneKind($category_id)
    {
        $query = 'SELECT projects.*,
                    category.name as cat_name
                    FROM
                    projects
                    JOIN category ON projects.category_id = category.id
                    WHERE category_id = :category_id';
        $stmt = self::$dbh->prepare($query);
        $params = array(':category_id' => $category_id);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Function to search for projects
     * @param string $search
     * @return array
     */
    public function search($search)
    {
        $query = "SELECT * FROM projects
                  WHERE (name LIKE '%".$search."%'
                  OR discription LIKE '%".$search."%')";
        $stmt = self::$dbh->prepare($query);
        $params = array(':search' => $search);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}