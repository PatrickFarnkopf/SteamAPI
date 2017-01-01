<?php

namespace UsersAPI;

interface ISteamUser
{
    function getPlayerSummaries(array $steamIds);
    function getFriendList($steamId);
}
