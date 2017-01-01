<?php

require_once '../loader.php';

$api = new \Steam\API(SteamApiConfig::API_URL, SteamApiConfig::API_KEY);
$userApi = new \Steam\UsersAPI\Implementation\SteamUser($api);
$provider = new \Steam\Application\Infrastructure\UserProvider($userApi);
$game = new \Steam\Application\Games\CSGO\Game();
$result = $provider->getGameInventory($game, 76561198017244914);

print_r($result);
