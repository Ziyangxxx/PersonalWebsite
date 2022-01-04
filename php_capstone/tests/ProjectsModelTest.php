<?php
use PHPUnit\Framework\TestCase;

use App\Models\Model;
use App\Models\ProjectsModel;

final class ProjectsModelTest extends TestCase
{
    protected $projectsModel;

    public function setup()
    {
        $dbh = new PDO('mysql:hostname=localhost;dbname=php_capstone', 'capstone_user', 'mypass2020!');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        Model::init($dbh);
        $this->projectsModel = new ProjectsModel();
    }

    public function testProjectsReturnsArrayOfAllRecords()
    {
        $model = $this->projectsModel;
        $all = $model->all();
        $this->assertIsArray($all);
    }

    public function testGetOneProjectReturnsArrayOfOneProjects()
    {
        $model = $this->projectsModel;
        $projects = $model->one(7);
        $this->assertArrayHasKey('name', $projects);
    }

}