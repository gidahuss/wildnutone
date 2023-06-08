<?php

$host = 'localhost';
$db = 'wildnutone';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
$email_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        $conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }


    $email = trim($_POST['email']);
    if (empty($email)) {
        $email_err = "Please enter a email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email.";
    }
    $data = [
        'email' => $email,
    ];

    $sql = 'INSERT INTO subscription(email) VALUES(:email)';

    $statement = $conn->prepare($sql);

    $statement->execute($data);
    header("location: ../index.php");
    exit();

}
