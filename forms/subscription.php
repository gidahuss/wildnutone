<?php

require_once(__DIR__ . '/../vendor/autoload.php');
$email_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    if (empty($email)) {
        $email_err = "Please enter a email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email.";
    }

    $credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()
        ->setApiKey('api-key', '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');
    $apiInstance = new SendinBlue\Client\Api\ContactsApi(
        new GuzzleHttp\Client(),
        $credentials
    );

    $createContact = new \SendinBlue\Client\Model\CreateContact([
        'email' => $email,
        'listIds' => []
    ]);
    try {
        $result = $apiInstance->createContact($createContact);
        header("location: ../index.php");
        exit();
    } catch (Exception $e) {
        echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
    }

}




//$host = 'localhost';
//$db = 'wildnutone';
//$user = 'root';
//$password = '';
//
//$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
//$email_err = "";
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
//    try {
//        $conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
//
//    } catch (PDOException $e) {
//        echo $e->getMessage();
//    }
//
//
//    $email = trim($_POST['email']);
//    if (empty($email)) {
//        $email_err = "Please enter a email.";
//    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $email_err = "Please enter a valid email.";
//    }
//    $data = [
//        'email' => $email,
//    ];
//
//    $sql = 'INSERT INTO subscription(email) VALUES(:email)';
//
//    $statement = $conn->prepare($sql);
//
//    $statement->execute($data);
//    header("location: ../index.php");
//    exit();

//}
