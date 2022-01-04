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
 * Index Page / Front Controller
 * @file index.php
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @updated_at 2020-08-31
 * 
 */

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../config.php';

$allowed = [
    'contact',
    'gallery',
    'index',
    'info_table',
    'intro',
    'port',
    'success',
    'vali_contact',
    'sign_in',
    'detail',
    '404',
    'admin',
    'admin_p',
    'admin_add',
    'admin_edit',
    'admin_no'
];

$req = trim($_SERVER['REQUEST_URI'], '/');
$req = explode('?',$req)[0];


if(empty($req)){
    
    $controller = 'index';

}else{

    if(in_array($req, $allowed)){

        $controller = $req;

    }

};

$path = __DIR__ . '/../app/Controllers/';

$file = $path . $controller . '.php';

if(file_exists($file)) {
	require $file;
	die;
} else {
	require $path . '404.php';
	die;
}