<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

ob_start();// start output buffering
session_start();// start session

$flash = $_SESSION['flash'] ??[];
$errors = $_SESSION['errors'] ?? [];
$post = $_SESSION['post'] ?? [];

unset($_SESSION['flash']);
unset($_SESSION['errors']);
unset($_SESSION['post']);

/**
 * Database credentials
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-8-25
 */

define('DB_DSN', 'mysql:hostname=localhost;dbname=php_capstone');
define('DB_USER', 'capstone_user');
define('DB_PASS', 'mypass2020!');
define('SITE_NAME', 'Carlos\'s Site');

$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

\App\Models\Model::init($dbh);

require __DIR__ . '/model.php';

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/functions.php';

if(!empty($_GET['logout'])){
    if(!empty($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
        session_regenerate_id();
        flash('success', 'You have successfully logged out!');
    }else{
        flash('error', 'You can not log out before log in.');
    }

    header('Location: /sign_in');
    die;
}

$db_logger = new \App\Lib\DatabaseLogger($dbh);
logVisit($db_logger);

$f_logger = new \App\Lib\FileLogger(__DIR__ . '/logs/events.log');
logVisit($f_logger);