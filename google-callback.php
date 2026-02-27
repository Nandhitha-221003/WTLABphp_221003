<?php
session_start();

require 'vendor/autoload.php';
require 'config/db.php';

$client = new Google_Client();
$client->setClientId($env['GOOGLE_CLIENT_ID']);
$client->setClientSecret($env['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($env['GOOGLE_REDIRECT_URI']);
if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if (isset($token['error'])) {
        die("Error fetching token");
    }

    $client->setAccessToken($token);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    $email = $google_account_info->email;
    $name  = $google_account_info->name;

    // Check if user exists in MongoDB
    $existingUser = $users->findOne(['email' => $email]);

    if (!$existingUser) {
        $users->insertOne([
            'email' => $email,
            'name' => $name,
            'createdAt' => new MongoDB\BSON\UTCDateTime()
        ]);
    }

    // 🔥 SET SESSION
    $_SESSION['user'] = $email;

    // Redirect to dashboard
    header("Location: dashboard.php");
    exit();


// If no code present
header("Location: login.php");
exit();