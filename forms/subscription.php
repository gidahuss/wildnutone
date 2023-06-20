<?php

require_once(__DIR__ . '/../vendor/autoload.php');
session_start();
$_SESSION['signed_up'] = true;

$email_err = "";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
$apiKey = $_ENV['BREVO_API_KEY'] ?? '123';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    if (empty($email)) {
        $email_err = "Please enter a email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email.";
    }

    $credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()
        ->setApiKey('api-key', $apiKey);
    $apiInstance = new SendinBlue\Client\Api\ContactsApi(
        new GuzzleHttp\Client(),
        $credentials
    );

    $createContact = new \SendinBlue\Client\Model\CreateContact([
        'email' => $email,
        'listIds' => []
    ]);
    try {
        $_SESSION['signed_up'] = true;
        $result = $apiInstance->createContact($createContact);
        header("location: ../index.php");
        exit();
    } catch (Exception $e) {
        $message = $e->getMessage();
        if (str_contains($message, 'duplicate_parameter')) {

            $_SESSION['signed_up'] = true;
            header("location: ../index.php");
            exit();
        }
        echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
    }

}