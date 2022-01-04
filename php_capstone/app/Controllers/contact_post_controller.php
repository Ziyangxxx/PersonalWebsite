<?php
/**
 * Validates post requests
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @updated_at 2020-08-31
 */
use App\Lib\Validator;

$v = new Validator($_POST);

$required = array(
    'first',
    'last',
    'country',
    'province',
    'city',
    'street',
    'postalcode',
    'phone',
    'email',
    'password',
    'password_confirm'
);

$v->required($required);
$v->email('email');
/* $v->num('phone'); */
$v->postalcode('postalcode');
$v->matches('password', 'password_confirm');
$v->strongpasswd('password', 'password_confirm');
$v->len('first',2 ,100);
$v->len('last',2 , 100);
$v->len('country',2 , 255);
$v->len('province',2 , 255);
$v->len('city',2 , 255);
$v->len('street',2 , 255);
$v->legal('first');
$v->legal('last');
$v->legal('country');
$v->legal('province');
$v->legal('city');
$v->street('street');
$v->sameEmail('email',$dbh);

$bug = $v->errors();
if(count($bug) > 0) {

    $_SESSION['post'] = $v->post();
    $_SESSION['errors'] = $v->errors();
    
    header('Location: /contact');
    die;

}

$user_id = saveUser($_POST, $dbh);

if($user_id > 0){
    $_SESSION['user_id'] = $user_id;
    session_regenerate_id();
    flash('success', 'You have successfully registered!');
    header('Location: /success');
    die;
}else{
    die('System error. Try again later.');
};
