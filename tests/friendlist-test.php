<?php

require_once '../loader.php';

// Test 1
$api = new \Steam\API(SteamApiConfig::API_URL, SteamApiConfig::API_KEY);
$userApi = new \Steam\UsersAPI\Implementation\SteamUser($api);

$response = $userApi->getFriendList(76561198017244914); // my steam id

print_r($response->getResult());

// Test 2
$provider = new \Steam\Application\Infrastructure\UserProvider($userApi);
$result = $provider->getFriendList(76561198017244914);

print_r($result);

// Test 3
$result = $provider->loadUsers($result);

print_r($result);
