<?php

require_once '../loader.php';

$api = new API(SteamApiConfig::API_URL, SteamApiConfig::API_KEY);

if ($api->isAvailable())
    echo "online\n";
else
    echo "offline\n";