<?php
use PHPUnit\Framework\TestCase;

use App\Models\Model;
use App\Models\UsersModel;

final class UsersModelTest extends TestCase
{
    protected $usersModel;

    public function setup()
    {
        $dbh = new PDO('mysql:hostname=localhost;dbname=php_capstone', 'capstone_user', 'mypass2020!');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        Model::init($dbh);
        $this->usersModel = new UsersModel();
    }

    public function testGetAllUsersReturnsArray()
    {
        $model = $this->usersModel;
        $all = $model->all();
        $this->assertIsArray($all);
    }

    public function testGetOneUserReturnsArrayOfOneUsers()
    {
        $model = $this->usersModel;
        $one = $model->one(23);
        $this->assertArrayHasKey('first', $one);
    }
}