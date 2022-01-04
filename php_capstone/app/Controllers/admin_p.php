<?php

/**
 * Admin Projects Page
 * @file admin_p.php
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @updated_at 2020-09-28
 * 
 */

// variables
$title = 'Admin_p';
$slug = 'admin_p';

use App\Models\ProjectsModel;
use App\Models\AdminModel;

$delete = new AdminModel();
$model = new ProjectsModel();

$projects = $model->getAll();

if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['delete_id'])) {

    $delete_id = e($_POST['delete_id']);

    $delete_project = $delete->deleteProject($delete_id);
    flash('success', 'You have deleted a project');
    header('Location: /admin_p');
    die;
}

require __DIR__ . '/../Views/admin_p.php';