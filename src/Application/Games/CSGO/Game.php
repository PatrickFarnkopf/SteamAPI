<?php

namespace Steam\Application\Games\CSGO;

use \Steam\Application\Games\BaseGame;
use \Steam\Application\Games\IGame;

class Game extends BaseGame implements IGame
{
    const APP_ID = 730;

    public function getAppId()
    {
        return self::APP_ID;
    }

    public function hasInventory()
    {
        return true;
    }
}
