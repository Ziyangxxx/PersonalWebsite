<?php 
/**
 * Sign in page
 * @author Carlos Xu <asdiop963@hotmail.com>
 * @date_interval_create_form_date_string() 2020-09-03
 */
require __DIR__ . '/includes/header.inc.php';
require __DIR__ . '/includes/nav.inc.php';


if('POST' === $_SERVER['REQUEST_METHOD']){

    $error = [];

    if(empty($_POST['email'])){
        $errors['email'] = "Email is required";
    }
    if(empty($_POST['password'])){
        $errors['password'] = "Password is required";
    }

    // dd($_SESSION);

    if(empty($errors)){
        $query = 'SELECT * FROM users WHERE email = :email';
        $stmt = $dbh->prepare($query);
        $params = array(
            ':email' => $_POST['email']
        );
        $stmt->execute($params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(password_verify($_POST['password'],$user['password'])){
            
            flash('success', 'You have successfully logged in!');
            $_SESSION['user_id'] = $user['id'];
            session_regenerate_id();
            header('Location: /success');
            die;
        }else{
            flash('error', 'Invalid Credential!');
            header('Location: /sign_in');
            die;
        }

    }// end of no error

    flash('error', 'Invalid credentidals');
    $_SESSION['errors'] = $errors;
    header('Location: /sign_in');
    die;

}

?>
<h1>Login Here</h1>

<form action="/sign_in" 
      method="post"
      autocomplete="on"
      novalidate
      class="styled_form">

    <fieldset id="fs1">
        <legend>User Info</legend>

        <div><a href="/contact">-REGISTER</a> if you do not have an account.</div>

        <p>
            <label class="required" for="email">E-mail: </label>
                <input type="email"
                    name="email"
                    id="email"
                    required
                    value="<?=$post['email'] ?? ''?>"
                    placeholder="Enter your e-mail"
                />
            <?=$errors['email'][0] ?? '' ?>
        </p>

        <p><!-- start of password input -->
            <label class="required" for="password">Password: </label>
                <input type="password"
                    id="password"
                    required
                    name="password"
                    value="<?=$_POST['password'] ?? ''?>"
                    placeholder="Enter your password"
                />
            <?=$errors['password'][0] ?? ''?>
        </p>

        <button type="submit">Login</button></p>

    </fieldset>

</form>

<div class="line2"></div>


<?php require __DIR__ . '/includes/footer.inc.php'; ?>