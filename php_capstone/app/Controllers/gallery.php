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
 * Gallery Page
 * @file gallery.php
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @updated_at 2020-08-20
 * 
 */

// variables
$title = 'Gallery';
$slug = 'gallery';

require __DIR__ . '/../Models/ProjectsModel.php';


use App\Models\ProjectsModel;
use App\Models\CategoryModel;

$model = new ProjectsModel();
$cat_model = new CategoryModel();

$categories = $cat_model->all();

if(!empty($_GET['cat_id'])) {
    $projects = $model->getOneKind($_GET['cat_id']);

} elseif(!empty($_GET['search'])){
    $projects = $model->search($_GET['search']);

}else {
    $projects = $model->getAll();
}

require __DIR__ . '/../Views/gallery.php';