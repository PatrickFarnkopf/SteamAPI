<?php

require_once '../loader.php';

$api = new API(SteamApiConfig::API_URL, SteamApiConfig::API_KEY);
$userApi = new \UsersAPI\Implementation\SteamUser($api);

$response = $userApi->getFriendList(76561198017244914); // my steam id

print_r($response->getResult());
