<?php

// variables
$title = 'Admin';
$slug = 'admin';

use App\Models\AdminModel;
use App\Models\LogModel;

$model = new AdminModel();
$log = new LogModel();

$t_projects = $model->count('projects');
$t_cats = $model->count('category');
$t_users = $model->count('users');
$t_comments = $model->count('comments');

$l_date = $model->latest('projects');
$e_date = $model->earliest('projects');

$log_events = $log->getLog();

require __DIR__ . '/../Views/admin.php';