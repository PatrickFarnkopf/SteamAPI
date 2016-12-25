<?php

require_once '../loader.php';

$api = new API(SteamApiConfig::API_URL, SteamApiConfig::API_KEY);
$userApi = new \Users\Implementation\SteamUser($api);

$response = $userApi->GetPlayerSummaries([76561198017244914]); // my steam id

print_r($response);
