<?php

namespace UserAPI;

use \UsersAPI\Implementation\SteamUser;

final class ContextUserAPI
{
    private static $steamUser;

    private function __construct()
    {
    }

    public static function SteamUser()
    {
        if (self::$steamUser == null)
            self::$steamUser = new SteamUser();
        return self::$steamUser;
    }
}
