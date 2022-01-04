<?php
use PHPUnit\Framework\TestCase;

use App\Models\Model;
use App\Models\CategoryModel;

final class CategoryModelTest extends TestCase
{
    protected $categoryModel;

    public function setup()
    {
        $dbh = new PDO('mysql:hostname=localhost;dbname=php_capstone', 'capstone_user', 'mypass2020!');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        Model::init($dbh);
        $this->categoryModel = new CategoryModel();
    }

    public function testGetAllCategoryReturnsArray()
    {
        $model = $this->categoryModel;
        $all = $model->all();
        $this->assertIsArray($all);
    }

    public function testGetOneCategoryReturnsArrayOfOneCategory()
    {
        $model = $this->categoryModel;
        $one = $model->one(2);
        $this->assertArrayHasKey('name', $one);
    }
}