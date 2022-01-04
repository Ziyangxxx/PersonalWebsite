<?php

namespace App\Models;

class CommentsModel extends Model
{

    protected $table = 'comments';
    protected $key = 'id';

    /**
     * Function to add comments
     * @param string $comment
     * @param Object $dbh
     */
    public function comment($comment)
    {
        $query = "INSERT INTO comments
                  (comments,
                   user_id,
                   project_id)
                  VALUES
                  (:comment,
                   :user_id,
                   :project_id)";
        $stmt = self::$dbh->prepare($query);
        $params = array(':comment' => $_POST['comments'],
                        ':user_id' => $_SESSION['user_id'],
                        ':project_id' => $_GET['id']);
        $stmt->execute($params);
        // return $dbh->lastInsertId();
    }

}