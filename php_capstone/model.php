<?php

/**
 * Database functions for app
 * @file model.php
 * @author Carlos Xu <asdiop963@hotmail.com>
 */


/**
 * Save a user in the Database table
 * @param array $user $_POST values
 * @param Object $dbh [description]
 * @return Int Last Insert Id
 */
function saveUser($user, $dbh) :int//This means it returns a Int
{

	$query = "INSERT INTO users
              (
              first, 
              last, 
              country,
              province,
              city,
              street,
              postalcode,
              phone,
              email, 
              password
              )
              VALUES
              (
              :first, 
              :last, 
              :country,
              :province,
              :city,
              :street,
              :postalcode,
              :phone,
              :email, 
              :password
          )";
    // 3. Prepare the query to be executed
    $stmt = $dbh->prepare($query);

    // 4. Bind values safely (escape) to place holders
    $params = array(
        ':first' => $_POST['first'],
        ':last' => $_POST['last'],
        ':country' => $_POST['country'],
        ':province' => $_POST['province'],
        ':city' => $_POST['city'],
        ':street' => $_POST['street'],
        ':postalcode' => $_POST['postalcode'],
        ':phone' => $_POST['phone'],
        ':email' => $_POST['email'],
        ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    );

    // 5. Execute
    $stmt->execute($params);

    return $dbh->lastInsertId();

}


/**
 * Get a user based on parimary key
 * @param  Int $user_id primary key
 * @param  object $dbh  database handle
 * @return array  the user
 */
function getUser($user_id, $dbh)// means this function returns an array
{
	//1. Create the query
	$query = 'SELECT * FROM users WHERE id = :user_id';
	//2. Prepare the query
	$stmt = $dbh->prepare($query);
	//3. Bind the parameter(s)
	$params = array(
		':user_id' => $_SESSION['user_id']
  );

	//4. Execute the query
	$stmt->execute($params);
	//5. Fetch the results.
	return $stmt->fetch(PDO::FETCH_ASSOC);
	//return $stmt->fetchall(); return multiple 
}

/**
 * Get existed email address
 * @param object $dbh database handle
 */
function getEmail($email, $dbh)
{
  $query = 'SELECT email FROM users WHERE email = :email';
  $stmt = $dbh->prepare($query);
  $params = array(
    ':email' => $_POST['email']
  );
  $stmt->execute($params);
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * [getUsers description]
 * @param  [type] $dbh [description]
 * @return [type]      [description]
 */
function getUsers($dbh)// in para dependency injection
{
  $query = "SELECT * FROM users ORDER BY last ASC";

  $stmt = $dbh->prepare($query);

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // This function selects all the users so 'fetchall' to get multipal objects
}

/**
 * @param array $user
 * @param object $dbh
 * @return int number of affected rows
 */
function updateUser($user, $dbh)
{

  $query = "UPDATE users 
            SET
            first = :first,
            last = :last,
            age = :age,
            email = :email,
            updated_at = NOW()
            WHERE 
            id = :user_id";

  $stmt = $dbh->prepare($query);

  $params = array(
            ':first' => $user['first'],
            ':last' => $user['last'],
            ':age' => $user['age'],
            ':email' => $user['email'],
            ':user_id' => $user['id']
  );

  $stmt->execute($params);

  return $stmt->rowCount();

}

/**
 * Delete a user based on id
 * @param int $user_id
 * @param object $dbh
 * @return int affected rows
 */
function deleteUser($user_id, $dbh)
{
  $query = "DELETE FROM
              users
              WHERE
              id = :user_id";

  $stmt = $dbh->prepare($query);

  $params = array(
              'id' => $user_id
  );

  $stmt->execute($params);

  return $stmt->rowCount();
}