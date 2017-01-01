<?php

namespace Steam\Application\Games;

abstract class BaseGame implements IGame
{
    const INVENTORY_URL_FORMAT  = "http://steamcommunity.com/profiles/%s/inventory/json/%s/2";

    public abstract function getAppId();
    public abstract function hasInventory();

    public function getInventoryUrl($steamid)
    {
        return sprintf(BaseGame::INVENTORY_URL_FORMAT, $steamid, $this->getAppId());
    }
}
