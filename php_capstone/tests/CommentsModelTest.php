<?php
use PHPUnit\Framework\TestCase;

use App\Models\Model;
use App\Models\CommentsModel;

final class CommentsModelTest extends TestCase
{
    protected $commentsModel;

    public function setup()
    {
        $dbh = new PDO('mysql:hostname=localhost;dbname=php_capstone', 'capstone_user', 'mypass2020!');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        Model::init($dbh);
        $this->commentsModel = new CommentsModel();
    }

    public function testGetAllCommentsReturnsArray()
    {
        $model = $this->commentsModel;
        $all = $model->all();
        $this->assertIsArray($all);
    }

    public function testGetOneCommentReturnsArrayOfOneComments()
    {
        $model = $this->commentsModel;
        $one = $model->one(1);
        $this->assertArrayHasKey('comments', $one);
    }
}