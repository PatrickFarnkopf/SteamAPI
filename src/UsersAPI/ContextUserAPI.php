<?php

namespace Steam\UsersAPI;

use \Steam\UsersAPI\Implementation\SteamUser;
use \Steam\API;
use \SteamApiConfig;

class ContextUserAPI
{
    private static $steamUser;

    private function __construct()
    {
    }

    public static function SteamUser()
    {
        if (self::$steamUser == null)
            self::$steamUser = new SteamUser(new API(SteamApiConfig::API_URL, SteamApiConfig::API_KEY));
        return self::$steamUser;
    }
}
