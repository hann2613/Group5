<?php
function get_users() {
    global $db;
    $query = 'SELECT * FROM users
              ORDER BY id';
    $statement = $db->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll();
    $statement->closeCursor();
    return $users;
}



function get_user($user_id) {
    global $db;
    $query = 'SELECT * FROM users
              WHERE id = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
}



function delete_user($user_id) {
    global $db;
    $query = 'DELETE FROM users
              WHERE id = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_user($first_name, $last_name, $email, $password) {
    global $db;
    $query = 'INSERT INTO users
                 (firstName, lastName, email, password)
              VALUES
                 (:first_name, :last_name, :email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function update_user($user_id, $first_name, $last_name, $email, $password) {
    global $db;
    $query = 'UPDATE users
              SET firstName = :first_name,
                  lastName = :last_name,
                  email = :email,
                  password = :password
              WHERE id = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $statement->closeCursor();
}
?>