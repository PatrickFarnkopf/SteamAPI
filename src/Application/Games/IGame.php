<?php

namespace Steam\Application\Games;

interface IGame
{
    function getAppId();
    function hasInventory();
    function getInventoryUrl($steamid);
}
