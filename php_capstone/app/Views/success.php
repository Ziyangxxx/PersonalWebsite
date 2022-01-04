<?php

/**
 * info successfully added in contact page
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-8-25
 */

require __DIR__ . '/includes/header.inc.php' ;
require __DIR__ . '/includes/nav.inc.php';

$user_id = $_SESSION['id'] ?? 0;
unset($_SESSION['id']);

if(empty($_SESSION['user_id'])){
    flash('error', 'Please log in or register to continue');
    header('Location: login.php');
}

$user = getUser($user_id, $dbh);
?>
<h1>Your Profile</h1>

<?php if($user['user_level'] !== '1') :?><!-- user_level is a pre-set value, users have no access to change it -->
    <h2>Welcome back, <?=e($user['first'])?></h2>
<?php endif;?>

<?php if($user['user_level'] === '1') :?>
    <h2>Welcome back, Administrator <?=e($user['first'])?></h2>
    <p class="admin"><a href="admin">Admin Page</a></p>
<?php endif;?>

<fieldset>
    <ul>
        <li><strong>First Name: &nbsp;</strong> <?=e($user['first'])?></li>
        <li><strong>Last Name: &nbsp;</strong> <?=e($user['last'])?></li>
        <li><strong>Country: &nbsp;</strong> <?=e($user['country'])?></li>
        <li><strong>Province: &nbsp;</strong> <?=e($user['province'])?></li>
        <li><strong>Ciry: &nbsp;</strong> <?=e($user['city'])?></li>
        <li><strong>Street: &nbsp;</strong> <?=e($user['street'])?></li>
        <li><strong>Postal Code: &nbsp;</strong> <?=e($user['postalcode'])?></li>
        <li><strong>Email: &nbsp;</strong> <?=e($user['email'])?></li>
        <li><strong>Created at: &nbsp;</strong> <?=e($user['created_at'])?></li>
    </ul>
    <div class="logout"><a href="?logout=true">-Logout-</a></div>
</fieldset>

<?php require __DIR__ . '/includes/footer.inc.php'; ?>