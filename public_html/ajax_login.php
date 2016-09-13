<?php
require_once '../resources/library/connect.php';
require_once '../resources/library/secure-session.php';

sec_session_start();

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('You cannot access this file directly.');
} else {
    $error = array();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!$username || !$password) {
        die('Please fill in all the fields.');
    }

    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($stmt->error) {
        die("Error connecting with the database.");
    }

    $user_rows = $result->num_rows;

    if($user_rows == 0) {
        die("Incorrect username or password");
    }

    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($stmt->error) {
        die("Error connecting with the database.");
    }

    while($row = $result->fetch_assoc()) {
        $db_pass = $row['password'];
        if(!password_verify($password, $db_pass)) {
            die("Incorrect username or password");
        }

        $username = $row['username'];
        $id = $row['id'];
    }

    $_SESSION['username'] = $username;
    $_SESSION['id'] = $id;
    $_SESSION['signed_in'] = true;

    echo 'true';

}
?>
