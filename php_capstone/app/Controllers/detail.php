<?php

/**
 *    ____  ___       __________.__                               
 *    \   \/  /__ __  \____    /|__|___.__._____    ____    ____  
 *     \     /|  |  \   /     / |  <   |  |\__  \  /    \  / ___\ 
 *     /     \|  |  /  /     /_ |  |\___  | / __ \|   |  \/ /_/  >
 *    /___/\  \____/  /_______ \|__|/ ____|(____  /___|  /\___  / 
 *          \_/               \/    \/          \/     \//_____/ 
 *    _________              .__                
 *    \_   ___ \_____ _______|  |   ____  ______
 *    /    \  \/\__  \\_  __ \  |  /  _ \/  ___/
 *    \     \____/ __ \|  | \/  |_(  <_> )___ \ 
 *     \______  (____  /__|  |____/\____/____  >
 *             \/     \/                      \/
 */

/**
 * Detail Page
 * @file detail.php
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @updated_at 2020-09-24
 * 
 */

// variables
$title = 'Detail';
$slug = 'detail';

require __DIR__ . '/../Models/ProjectsModel.php';


use App\Models\ProjectsModel;
use App\Models\CategoryModel;
use App\Models\CommentsModel;
use App\Lib\Validator;
use phpDocumentor\Reflection\Location;

$model = new ProjectsModel();
$cat_model = new CategoryModel();
$comments = new CommentsModel();
$v = new Validator($_POST);

// Category nav
// ----------------------------------------------
$categories = $cat_model->all();

if(!empty($_GET['cat_id'])) {
    $projects = $model->getOneKind($_GET['cat_id']);
}

// See more link
// ----------------------------------------------
$projects_id= 0;
if(!(isset($_GET['id']))) {
    header('Location: gallery');
} else {
    $projects_id= $_GET['id'];
}

$detail = $model->getOne($projects_id);

// Comments
// ----------------------------------------------
if('POST' === $_SERVER['REQUEST_METHOD']) {

    // $v->legal('comments');
    // $bug = $v->errors();
    // if(count($bug) > 0) {

    //     $_SESSION['post'] = $v->post();
    //     $_SESSION['errors'] = $v->errors();
    //     flash('error', 'Invalid Content');
    
    // }
    
    if(!empty($_POST['comments'])){
        $comment = $comments->comment($_POST['comments']);
        flash('success', 'Thank you for your comment!');
        header('Location: detail?id=' . $_POST['project_id']);
        die;
    }else{
        flash('error', 'Can not submit empty comment');
        header('Location: detail?id=' . $_POST['project_id']);
        die;
    };

 /*   $comment = $comments->comment($_POST['comments']);
    if(!empty($_POST['comments'])){
        $_SESSION['comment_id'] = $comment_id;
        session_regenerate_id();
        flash('success', 'Thank you for your comment!');
    }elseif(empty($_POST['comments'])){
        flash('error', 'Can not submit empty comment');
    }else{
        die('System error. Try again later.');
    }; */
}


require __DIR__ . '/../Views/detail.php';