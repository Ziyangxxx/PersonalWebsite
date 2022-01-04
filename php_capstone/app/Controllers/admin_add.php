<?php

/**
 * page to add a project
 * @file admin_add.php
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @updated_at 2020-09-28
 * 
 */

// variables
$title = 'Admin_add';
$slug = 'admin_add';

use App\Models\AdminModel;
use App\Lib\Validator;

$v = new Validator($_POST);
$model = new AdminModel();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
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
        
        header('Location: /admin_add');
        die;
    }

    $project_id = $model->saveProject($_POST);

    if($project_id > 0){
        $_SESSION['project_id'] = $project_id;
        session_regenerate_id();
        flash('success', 'You have added a new project');
        header('Location: /admin_p');
        die;
    }else{
        die('System error. Try again later.');
    };

}

require __DIR__ . '/../Views/admin_add.php';