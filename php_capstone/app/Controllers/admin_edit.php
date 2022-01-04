<?php

/**
 * page to edit a project
 * @file admin_edit.php
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @updated_at 2020-09-28
 * 
 */

// variables
$title = 'Admin_edit';
$slug = 'admin_edit';

use App\Models\ProjectsModel;
use App\Models\AdminModel;
use App\Lib\Validator;

$model = new ProjectsModel();
$edit = new AdminModel();
$v = new Validator($_POST);

// $edit_id= 0;
// if(!(isset($_GET['project_id']))) {
//     header('Location: admin_p');
// } else {
    
// }
if('GET' === $_SERVER['REQUEST_METHOD']){
    $_SESSION['project_id'] = $_GET['project_id'];
    $edit_id= $_SESSION['project_id'];
    $one_project = $model->getOne($edit_id);
    
}elseif('POST' === $_SERVER['REQUEST_METHOD']){
    $required = array(
        'name',
        'image',
        'tools',
        'description',
        'created_year',
        'created_location');

    $v->required($required);
    $v->legal('name');
    $v->legal('image');
    $v->legal('tools');
    $v->legal('description');
    $v->legal('created_location');

    $bug = $v->errors();
    if(count($bug) > 0) {
    
        $_SESSION['post'] = $v->post();
        $_SESSION['errors'] = $v->errors();
        
        header('Location: /admin_edit');
        die;
    }

    if(!empty($_POST['id'])){
        $name = e($_POST['name']);
        $image = e($_POST['image']);
        $tools = e($_POST['tools']);
        $description = e($_POST['description']);
        $created_year = e($_POST['created_year']);
        $created_location = e($_POST['created_location']);
        $array = array(
                 $name,
                 $image,
                 $tools,
                 $description,
                 $created_year,
                 $created_location
        );
        $edited = $edit->updateProject($array);
        flash('success', 'You have added a new project');
        header('Location: /admin_p');
        die;
    }else{
        die('System error. Try again later.');
    };

};




require __DIR__ . '/../Views/admin_edit.php';